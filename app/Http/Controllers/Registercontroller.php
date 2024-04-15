<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    //
    //only when the user click student
    public function registers (Request $request){
        $role = $request->input('role');
     //  dd($role);
        if ($role === '1') {
            // Redirect to the student registration form
            return view('studentformreg');
        }elseif($role === '2'){
            return view('teacherform');

        }elseif($role === '3'){
            return view('adminstrationform');

        }else{
           // echo"error page not found";
           return redirect()->back()->with('error', 'Invalid role selected');

        }
    }

    
}

