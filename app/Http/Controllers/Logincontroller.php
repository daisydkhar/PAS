<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Logincontroller extends Controller
{
    //
    public function login(Request $request){
        
        $username=$request->input('username');
        $password=$request->input('password');


        $userob= User::where('email',$username)->where('password',$password)->first(); 

        if ($userob) {    

            // Redirect based on the user's type fetched from the database
            if ($userob->rolefk === 1) {
                // dd($userob);
                return view('student');
            } elseif ($userob->rolefk === 2) {
                return view('teacher');
            }elseif ($userob->rolefk === 3) {
                return view('admin');

            } else {
                // Handle invalid credentials or user not found
                return redirect()->back()->with('error', 'Invalid username or password.');
            }

        }
    }
}