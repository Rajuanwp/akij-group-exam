<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{

    public function index(){
        return view('admin.student.index');
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'firstname'     => 'required|string',
            'father_name'   => 'required|string',
            'mother_name'   => 'required|string',
            'mobile_number' => 'required|string',
            'status'        => 'required|integer',
        ]);

        Student::create([
            'firstname'     => $request->firstname,
            'lastname'      => $request->lastname,
            'father_name'   => $request->father_name,
            'mother_name'   => $request->mother_name,
            'mobile_number' => $request->mobile_number,
            'status'        => $request->status,
        ]);
        
        alert()->success('Add Student', 'Regestraton Successfully');
        return redirect()->route('student.list');
    }

    public function list()
    {
        $allStudents = Student::orderBy('id', 'desc')->get();

        return view('admin.student.list', compact('allStudents'));
    }

    public function edit($firstname)
    {
        $student = Student::where('firstname', $firstname)->first();
    
        if (!$student) {
            alert()->error('Error', 'Student Not Found');
            return redirect()->route('student.list');
        }
    
        return view('admin.student.edit', compact('student'));
    }


    public function update(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'firstname'     => 'required|string|max:255',
            'lastname'      => 'required|string|max:255',
            'father_name'   => 'required|string|max:255',
            'mother_name'   => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            
           
        ]);
    
        $student = Student::findOrFail($request->id);
        $student->firstname     = $request->firstname;
        $student->lastname      = $request->lastname;
        $student->father_name   = $request->father_name;
        $student->mother_name   = $request->mother_name;
        $student->mobile_number = $request->mobile_number;
        $student->status        = $request->status;
        $student->save();
    
        alert()->success('Update', 'Update Student Successfully');
        return redirect()->route('student.list');
    }

    public function delete($firstname)
    {
        $student = Student::where('firstname', $firstname)->first();
        
        if ($student) {
            $student->delete();
            alert()->success('Delete', 'Student deleted successfully');
        } else {
            alert()->error('Error', 'Student not found');
        }
        
        return redirect()->route('student.list');
    }    




}
