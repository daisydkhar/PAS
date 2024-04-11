<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdata;
use App\Models\Admin;
use App\Models\Department;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;


class Admincontroller extends Controller
{
    //
    public function admindata(Request $request){
        //to store data 
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);

        $adminob=new Admin();
        $adminob->firstname=$request->input('firstname');
        $adminob->middlename=$request->input('middlename');
        $adminob->lastname=$request->input('lastname');
        $adminob->email=$request->input('email');
        $adminob->password=$request->input('password');
        $adminob->phno=$request->input('phno');
        $adminob->role=$request->input('role');
        $adminob->address=$request->input('address');
        $adminob->save();

        //to store the email and password to usedata for login
        $userob = new Userdata();
        $userob->name = $request->input('firstname');
        $userob->email = $request->input('email');
        $userob->password = $request->input('password');
        $userob->type = 'admin'; 
        $userob->save();

    }

    public function logout(Request $request){

        return redirect('/');


    }

    public function deptdata(Request $request){

        // Fetch department data from the database
        $departments = Department::select('dept_id', 'deptname', 'hod')->get();
        // Return the department data as JSON response
        return response()->json([
            '$departments'=>$departments,
        ]);

    }

    public function coursedata(Request $request){

        // Fetch department data from the database
        $coursedatas = Course::select('course_id', 'coursename', 'duration')->get();
        //return response()->json($coursedatas);

        // Return the department data as JSON response
        return response()->json([
            '$courses'=>$coursedatas,
        ]);

    }

    public function useraccount(Request $request){

        // Fetch department data from the database
        $userdatas = Userdata::select('userId', 'name', 'email','password','type')->get();
        //return response()->json($userdatas);

        // Return the department data as JSON response
        return response()->json([
           '$users'=>$userdatas,
        ]);

    }
     
}


