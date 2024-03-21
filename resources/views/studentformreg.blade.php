<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>student register forms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/registerstyle.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <nav class=" p-3 bg-blue-200 ">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
              </svg>
        </nav>
    
       <div class=" bg-blue-100 flex justify-center h-screen">
            <form action="{{ route('studentregform.submit') }}" method ="POST" > 
                @csrf
                <div class=" mt-10  w-96 p-14 bg-blue-200 ">
                    <h1 class=" text-left  mb-1 text-2xl font-semibold">Student Registration</h1>
                    <div class="mt-10">
                   
                        <label for="name" class=" text-black font-medium p-6  mr-6">Name</label>
                        <input type="text" name ="stname" required class="border border-black "><br><br>

                        <label for="name" class=" text-black font-medium  p-6  mr-6">Rollno</label>
                        <input type="text" name ="rollno" required class="border border-black "><br><br>

                        <label for="name" class=" text-black font-medium  p-6  mr-6">Phone Number</label>
                        <input type="text" name ="phno" required class="border border-black "><br><br>
                                
                        <label for="name" class=" text-black font-medium  p-6  mr-6">Email(Username)</label>
                        <input type="text" name ="email" required class="border border-black "><br><br>

                        <label for="name" class=" text-black font-medium  p-6  mr-6">Password</label>
                        <input type="password" name ="password" placeholder="8 character" class="border border-black" ><br><br>
                           
                        <label for="name" class=" text-black font-medium  p-6  mr-6">Retype password</label>
                        <input type="password" name ="retype" class="border border-black " ><br><br>

                        <label for="name" class=" text-black font-medium p-6  mr-6">Date of Birth</label>
                        <input type="date" name ="dob"class="border border-black "><br><br>
                           
                        <label for="name" class=" text-black font-medium    mr-6 p-6">Address</label>
                        <input type="text" name ="address" required class="border border-black "><br><br>
                          
                        <label for="name" class=" text-black font-medium  p-6  mr-6">Semester</label>
                            
                        <select name ="sem" required class=" bg-white border border-black mt-2">
                            <option value="" selected>Choose a Semester..</option>
                            <option value="1">1st Semester</option>
                            <option value="2">2nd Semester</option>
                            <option value="3">3rd Semester</option>
                            <option value="4">4th Semester</option>
                            <option value="5">5th Semester</option>
                            <option value="6">6th Semester</option>
                         </select><br><br>
                       
                        <label for="name" class="mt-9 text-black font-medium p-6  mr-6">Course</label>
                            
                        <select name ="course" required class="  bg-white mt-1 border border-black">
                                <option value="" selected>Choose a course..</option>
                                <option value="1">BCA</option>
                                <option value="2">BCOM</option>
                                <option value="3">B.Sc</option>
                                    
                        </select><br><br>
                            
                        <label for="name" class="  text-black font-medium  p-6  mr-6">Year Of admission</label>
                        <input type="text" name ="yearofad" required class="border border-black mt-1"><br><br>
                     
                        <label for="name" class=" text-black font-medium p-6  mr-6">Gender</label>
                         
                        <select name ="gender" class=" bg-white mt-1 border border-black">
                            <option value=""></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                       
                        <button type="submit" name ="save" value="Ok" class="px-10 text-black mt-6 ml-6 bg-pink-200 focus:ring-4 rounded-lg text-1xl p-2 text-center">Save</button><br>
                       
                    </div>
                </div>
            </form>

        </div>
    </body>
</html>