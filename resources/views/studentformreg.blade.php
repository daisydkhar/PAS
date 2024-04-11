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
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="bg-gray-800 h-screen">
            <form action="{{ route('studentregform.submit') }}" method ="POST" > 
                @csrf
                    <h1 class=" text-center mb-10 mt-auto text-2xl font-bold  text-white">Student Registration</h1>
                        <label for="firstname" class=" text-white text-left font-serif text-1xl">First Name</label>
                        <input type="text" name ="stfirstname" required class="border border-black "><br><br>

                        <label for="middlename" class=" text-white text-left font-serif text-1xl">Middle Name</label>
                        <input type="text" name ="stmidname" class="border border-black "><br><br>

                        <label for="lastname" class=" text-white text-left font-serif text-1xl">Last  Name</label>
                        <input type="text" name ="stlastname" required class="border border-black "><br><br>
                    

                    
                        <label for="name" class=" text-white text-left font-serif text-1xl">Rollno</label>
                        <input type="text" name ="rollno" required class="border border-black "><br><br>

                        <label for="name"  class=" text-white text-left font-serif text-1xl">Phone Number</label>
                        <input type="text" name ="phno" required class="border border-black "><br><br>
                                
                        <label for="name" class=" text-white text-left font-serif text-1xl">Email(Username)</label>
                        <input type="text" name ="email" required class="border border-black "><br><br>

                        <label for="name"  class=" text-white text-left font-serif text-1xl">Password</label>
                        <input type="password" name ="password" placeholder="8 character" class="border border-black" ><br><br>
                           
                        <label for="name"   class=" text-white text-left font-serif text-1xl">Retype password</label>
                        <input type="password" name ="retype" class="border border-black " ><br><br>

                        <label for="name" class=" text-white text-left font-serif text-1xl">Date of Birth</label>
                        <input type="date" name ="dob"class="border border-black "><br><br>
                           
                        <label for="name" class=" text-white text-left font-serif text-1xl">Address</label>
                        <input type="text" name ="address" required class="border border-black "><br><br>
                          
                        <label for="name"  class=" text-white text-left font-serif text-1xl">Semester</label>
                            
                        <select name ="sem" required class=" bg-white border border-black mt-2">
                            <option value="" selected>Choose a Semester..</option>
                            <option value="1">1st Semester</option>
                            <option value="2">2nd Semester</option>
                            <option value="3">3rd Semester</option>
                            <option value="4">4th Semester</option>
                            <option value="5">5th Semester</option>
                            <option value="6">6th Semester</option>
                         </select><br><br>
                       
                        <label for="name"  class=" text-white text-left font-serif text-1xl">Course</label>
                            
                        <select name ="course" required class="  bg-white mt-1 border border-black">
                                <option value="" selected>Choose a course..</option>
                                <option value="1">BCA</option>
                                <option value="2">BCOM</option>
                                <option value="3">B.Sc</option>
                                    
                        </select><br><br>
                            
                        <label for="name" class=" text-white text-left font-serif text-1xl">Year Of admission</label>
                        <input type="text" name ="yearofad" required class="border border-black mt-1"><br><br>
                     
                        <label for="gen"  class=" text-white text-left font-serif text-1xl">Gender</label>
                         
                        <select name ="gender" class=" bg-white mt-1 border border-black">
                            <option value=""></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                       
                        <button type="submit" name ="save" value="Ok" class="px-10 text-black mt-6 ml-6 bg-pink-200 focus:ring-4 rounded-lg text-1xl p-2 text-center">Save</button><br>
                       
                  
                </form>

</body>
</html>