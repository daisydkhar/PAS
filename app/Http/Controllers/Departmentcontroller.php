<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class Departmentcontroller extends Controller
{
    //to fetch data from the department and display to view in table  format
    public function deptdata(Request $request){
       //$department= Department::all();  
       $department = Department::select('dept_id', 'deptname', 'hod')->get();

        return response()->json($department);

    
   }
}
