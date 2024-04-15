<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

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

        //to store student data for login
        $userob = new User();
        $userob->firstname= $request->input('stfirstname');
        $userob->middlename= $request->input('stmiddlename');
        $userob->lastname= $request->input('stlastname');
        $userob->email= $request->input('email');
        $userob->password=$request->input('password');
        $userob->semester=$request->input('sem');
        $userob->phno=$request->input('phno');
        $userob->address=$request->input('address');
        $userob->dob=$request->input('dob');
        $userob->yearOfAd=$request->input('yearofad');
        $userob->gender=$request->input('gender');
        $userob->course=$request->input('course');
        $userob->rolefk = '1';
        $userob->save();
        return redirect('/');







        
    }
    
}
