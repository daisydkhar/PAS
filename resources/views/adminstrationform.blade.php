<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Document</title>
</head>
<body>
<div class="h-screen bg-grey-100">
   <form action="{{ route('adminregform.submit') }}"  method="POST"> 
    @csrf
        <h1 class=" mb-2 text-2xl text-center font-semibold">Admin Registration</h1>
        <div class=" mt-5  ml-5 ">              

        <label for="firstname" class=" text-black font-medium  mr-6 p-4">First Name</label>
        <input type="text" name ="firstname" required class="border border-black mt-6"><br><br>
        

        <label for="middlename" class=" text-black font-medium  mr-6 p-4">Middle Name</label>
        <input type="text" name ="midname"  class="border border-black mt-6"><br><br>
        


        <label for="lastname" class=" text-black font-medium  mr-6 p-4">Last Name</label>
        <input type="text" name ="lastname" required class="border border-black mt-6"><br><br>

        <label for="email" class=" text-black font-medium  mr-6 p-4">Email(Username)</label>
        <input type="text" name ="email" required class="border border-black mt-6"><br><br>
              
        <label for="password" class=" text-black font-medium mr-6 p-4">Password</label>
        <input type="password" name ="password" required  placeholder="8 character"  class="border border-black mt-6"><br><br>
        
        
        <label for="password" class=" text-black font-medium  mr-6 p-4">Retype password</label>
        <input type="password" name ="retype" required placeholder="8 character" class="border border-black mt-6"><br><br>

        <label for="phno" class=" text-black font-medium mr-6  p-4">Phone Number</label>
        <input type="text" name ="phno" required class="border border-black mt-6"><br><br>
        

        <label for="role"  class=" text-black font-medium mr-6 p-4">Role</label>
        <select name ="role" class=" bg-white mt-1 border border-black">
            <option value=""></option>
            <option value="teacher">Teacher</option>
            <option value="non-teaching Staff">Non teaching</option>
        </select><br><br>

        <label for="address" class=" text-black font-medium mr-6 p-5">Address</label>
        <input type="text" name ="address" class="border border-black mt-6"><br><br>

        <button type="submit" name ="save" value="Ok" class="px-10 text-white mt-6 ml-6 bg-blue-900 focus:ring-4 rounded-lg text-1xl p-2 text-center">Save</button>


        </div>
    </form>

</body>
</html>