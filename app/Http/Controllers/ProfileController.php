<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;


class ProfileController extends Controller
{
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }


    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'email'         => 'required|email',
            'address'       => 'nullable|string',
            'designation'   => 'nullable|string',
            'about'         => 'nullable|string',
        ], [
            'name.required'     => 'The name field is required.',
            'email.required'    => 'The email field is required.',
            'email.email'       => 'Please enter a valid email address.',
        ]);
    
        $user = Auth::user();
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->address      = $request->address;
        $user->designation  = $request->designation;
        $user->about        = $request->about;
        $user->save();
    
        alert()->success('Success Title', 'Profile updated successfully');
        return back();
    }
    

   
    public function passwordUpdate(Request $request){
        $request->validate([
            'current_password'  =>'required',
            'password'          =>'required|confirmed',
        ]);

        $user = auth()->user();
        if (!Hash::check($request->current_password, $user->password)) {
            alert()->error('Error', 'Old password doesn\'t match');
            return back();
        }

        $user->password = Hash::make($request->password);
        $user->save();

        alert()->success('Success Title', 'Profile updated successfully');
        return back();
    }
   
  
}
