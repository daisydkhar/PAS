<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    //
    //only when the user click student
    public function registers (Request $request){
        $type = $request->input('type');
       //dd($type);
        if ($type === 'student') {
            // Redirect to the student registration form
            return view('studentformreg');
        }elseif($type ==='teacher'){
            return view('teacherform');

        }else{
            echo"error page not found";
        }
    }
}
