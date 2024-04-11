<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Userdata;

class Studentcontroller extends Controller
{
    //to validate and store data
    public function studentdata(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);
        
        $stob = new Student();
        $stob->rollno=$request->input('rollno');
        $stob->firstname=$request->input('stfirstname');
        $stob->middlename=$request->input('stmidname');
        $stob->lastname=$request->input('stlastname');
        $stob->stemail=$request->input('email');
        $stob->stpassword=$request->input('password');
        $stob->semester=$request->input('sem');
        $stob->phno=$request->input('phno');
        $stob->address=$request->input('address');
        $stob->dob=$request->input('dob');
        $stob->yearOfAd=$request->input('yearofad');
        $stob->gender=$request->input('gender');
        $stob->coursefk=$request->input('course');
        $stob->save();

        //to store the email and password to usedata for login
        $userob = new Userdata();
        $userob->name= $request->input('stfirstname');
        $userob->email = $request->input('email');
        $userob->password = $request->input('password');
        $userob->type = 'student'; // Set the user type to 'student'
        $userob->save();
        return redirect('/');







        
    }
    
}
