<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
       <title>teacher registration form</title>
    <body>
        <nav class=" p-6 bg-black ">
        </nav>
        <div class="bg-grey-300 h-screen ">
           
            
            <div class=" mb-2  w-auto h-100  p-5  " >
                <form action="{{ route('teacherregform.submit') }}" method ="post" > 
                @csrf
                    <h1 class=" mb-2 text-2xl font-semibold">Teacher Registration</h1>
                     
                        <label for="name" class=" text-black font-medium  mr-6">Name</label>
                        <input type="text" name ="tname" required class="border border-black mt-6"><br><br>
                   
                        <label for="name" class=" text-black font-medium mr-6 ">Phone Number</label>
                        <input type="text" name ="phno" required class="border border-black mt-6"><br><br>

                        <label for="name" class=" text-black font-medium  mr-6">Email(Username)</label>
                        <input type="text" name ="email" required class="border border-black mt-6"><br><br>
                              
                        <label for="name" class=" text-black font-medium mr-6 ">Password</label>
                        <input type="password" name ="password" required  placeholder="8 character"  class="border border-black mt-6"><br><br>
                        
                        <label for="name" class=" text-black font-medium  mr-6">Retype password</label>
                        <input type="password" name ="retype" required placeholder="8 character" class="border border-black mt-6"><br><br>
                               
                        <label for="name" class=" text-black font-medium mr-6 ">Date of Birth</label>
                        <input type="date" name ="dob" class="border border-black mt-6"><br><br>
                              
                        <label for="name" class=" text-black font-medium mr-6">Address</label>
                        <input type="text" name ="address" class="border border-black mt-6"><br><br>

                        <label for="name" class=" text-black font-medium ">Gender</label>
                        <select name ="gender" class=" bg-grey-100 border border-black mt-6 w-64">
                            <option value=""></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select><br><br>
                      
                        <button type="submit" name ="save" value="Ok" class="px-10 text-white mt-6 ml-6 bg-blue-900 focus:ring-4 rounded-lg text-1xl p-2 text-center">Save</button><br>
                     
                </div>
            </form>
        </div>
    </body>
</html>