<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Userdata;
use App\Models\Department;


class Teachercontroller extends Controller
{
    //to validate and store data
    public function teacherdata(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);
        
        
        $teacob= new Teacher();
        $teacob->tfirstname=$request->input('firstname');
        $teacob->middlename=$request->input('midname');
        $teacob->tlastname=$request->input('lastname');
        $teacob->temail=$request->input('email');
        $teacob->tpassword=$request->input('password');
        $teacob->tphno=$request->input('phno');
        $teacob->taddress=$request->input('address');
        $teacob->tdob=$request->input('dob');
        $teacob->gender=$request->input('gender');
        $teacob->deptfk=$request->input('dept');
        $teacob->save();

        


        $userob = new Userdata();
        $userob->name = $request->input('firstname');
        $userob->email = $request->input('email');
        $userob->password = $request->input('password');
        $userob->type = 'teacher'; // Set the user type to 'student'
        $userob->save();


        //to save the value of hod in department
       // $deptob=new Department();
        $val = $request->input('ishod');
        $deptId = $teacob->deptfk;
                $teachId= $teacob->id; //to retrieve the auto-generated value pf teacher 
        
                if ($val == 1) {
                    $dept = Department::find($deptId);
        
                    if ($dept) {
                        $dept->hod = $teachId; // Assign the teacher's ID as HOD
                        $dept->save(); // Save the changes to the department
                    }
                }


                return redirect('/');

    }
   
    
}

