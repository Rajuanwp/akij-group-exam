<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\JsonResponse;

class StudentApiController extends Controller
{
    

    //Store Methods
    public function store(Request $request)
    {
        
        $request->validate([
            'firstname'     => 'required|string',
            'father_name'   => 'required|string',
            'mother_name'   => 'required|string',
            'mobile_number' => 'required|string',
            'status'        => 'required|integer',
        ]);

        
        $student = Student::create([
            'firstname'     => $request->firstname,
            'lastname'      => $request->lastname,
            'father_name'   => $request->father_name,
            'mother_name'   => $request->mother_name,
            'mobile_number' => $request->mobile_number,
            'status'        => $request->status,
        ]);

       
        return response()->json([
            'message' => 'Student registered successfully',
            'student' => $student,
        ], 201); 
    }

    // List Method
    public function list()
    {
        $allStudents = Student::orderBy('id', 'desc')->get();
        return response()->json($allStudents, 200);
    }

    //Edit Method
    public function edit($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json([
                'message' => 'Student not found',
            ], 404); 
        }

        
        return response()->json([
            'message' => 'Student found',
            'student' => $student,
        ], 200); 
    }

    //Update Method
    public function update(Request $request)
    {
        
        $request->validate([
            'firstname'     => 'required|string|max:255',
            'lastname'      => 'required|string|max:255',
            'father_name'   => 'required|string|max:255',
            'mother_name'   => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'status'        => 'required|integer',
        ]);

        
        $student = Student::find($request->id);

        
        if (!$student) {
            return response()->json([
                'message' => 'Student not found',
            ], 404); 
        }

        
        $student->firstname     = $request->firstname;
        $student->lastname      = $request->lastname;
        $student->father_name   = $request->father_name;
        $student->mother_name   = $request->mother_name;
        $student->mobile_number = $request->mobile_number;
        $student->status        = $request->status;
        $student->save();

        
        return response()->json([
            'message' => 'Student updated successfully',
            'student' => $student,
        ], 200); 
    }
    
    //Delete Method

    public function delete($id)
    {
        $student = Student::find($id);
        
        if (!$student) {
            return response()->json([
                'message' => 'Student not found',
            ], 404); 
        }

        // Delete the student
        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully',
        ], 200); 
    }
}
