<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

        /*$adminob=new Admin();
        $adminob->firstname=$request->input('firstname');
        $adminob->middlename=$request->input('middlename');
        $adminob->lastname=$request->input('lastname');
        $adminob->email=$request->input('email');
        $adminob->password=$request->input('password');
        $adminob->phno=$request->input('phno');
        $adminob->role=$request->input('role');
        $adminob->address=$request->input('address');
        $adminob->save();*/

        //to store the email and password to usedata for login
        $userob = new User();
        $userob->firstname=$request->input('firstname');
        $userob->middlename=$request->input('middlename');
        $userob->lastname=$request->input('lastname');
        $userob->email=$request->input('email');
        $userob->password=$request->input('password');
        $userob->phno=$request->input('phno');
        $userob->address=$request->input('address');
        $userob->dob=$request->input('dob');
        $userob->gender=$request->input('gender');
        $userob->yearOFJoining=$request->input('yearofjoining');
        $userob->rolefk = '3';
        $userob->save();
        return redirect('/');

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
        // Fetch course data from the database
        $coursedatas = Course::select('course_id', 'coursename', 'duration')->get();
        //return response()->json($coursedatas);

        // Return the department data as JSON response
        return response()->json([
            '$courses'=>$coursedatas,
        ]);

    }

    public function userdata(Request $request){
        
            $userData = User::select(
                'userID',
                'email',
                'password',
                'firstname',
                'middlename',
                'lastname',
                'phno',
                'address',
                'dob',
                'gender',
                'yearOfAd',
                'rollno',
                'semester',
                'yearofJoining',
                'rolefk',
                'course',
                'department'
            )->get();
        
            return response()->json([
                '$userdata' => $userData,
            ]);
        }
//to fill  the form  with  data to be edited
        public function editDept($id){
            $deptupdate = Department::find($id);
            if($deptupdate){
                return response()->json([
                    'status'=>200,
                    'departmentdata'=>$deptupdate,
                    //'departmentId' => $id,
                ]);
            }
            else{
                return response()->json([
                    'status'=>404,
                    'message'=>"Failed to update department: Department not found.",
                ]);
            }
        }

        public function  updateDept(Request $request,$id){

            $deptupdate = Department::find($id);
            if($deptupdate){
                
                $dept->deptname=$request->input('dept_name');
                $dept->hod=$request->input('HOD_ofdept');
                $dept->update();

                return response()->json([
                    'status'=>200,
                    'message'=>"Department updated successfully.",
                ]);
            }
            else{
                return response()->json([
                    'status'=>404,
                    'message'=>"Failed to update department: Department not found.",
                ]);
            }


        }
        

    }


