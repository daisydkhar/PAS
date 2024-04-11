<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdata;

class Logincontroller extends Controller
{
    //
    public function login(Request $request){

        $username=$request->input('username');
        $password=$request->input('password');


        $userob= Userdata::where('email',$username)->where('password',$password)->first(); 

        if ($userob) {    

            // Redirect based on the user's type fetched from the database
            if ($userob->type === 'student') {
                return view('student');
            } elseif ($userob->type === 'teacher') {
                return view('teacher');
            }elseif ($userob->type === 'admin') {
                return view('admin');

            } else {
                // Handle invalid credentials or user not found
                return redirect()->back()->with('error', 'Invalid username or password.');
            }

        }
    }
}