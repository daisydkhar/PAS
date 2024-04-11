<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Document</title>
    
</head>
<body>
    <div class="bg-cover bg-no-repeat h-screen   bg-[url('/image/iibg.png')]">

    <nav class=" p-3 bg-blue-200 ">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-black font-semibold">Performance Appraisal Student</h1>
           
               
            <form  method="POST" action="{{ route('registration.submit') }}">
                @csrf
                <div class="ml-96 ">
                    <select name="type" class="mr-1 bg-blue-200 border border-black w-40">
                        <option>Registration Type</option>
                        <option value="student" class=" font-medium">Student</option>
                        <option value="teacher" class=" font-medium">Teacher</option>
                        <option value="admins" class=" font-medium">Admins</option>
                    </select>
                <button type="submit" class=" text-black   ml-30 w-10">Register</button>

                </div>
                   


            
            </form>
            
        </div>
        

    </nav>

    
            <!---- login page---->
    <div class="flex justify-center items-center mt-40 ">

        <div class="flex w-full max-w-4xl bg-blue-400 border rounded-lg overflow-hidden shadow-xl">
            <img class="w-1/2  bg-blue-200" src="image/logii.png" alt="image description">
            <div class="w-1/2 p-6 bg-blue-100">

            <form  action="{{ route('login.submit')}}" method="POST"  class="max-w-sm mx-auto" }}>
                <p class="text-black mt-10 ml-10 text-xl font-bold"><span class="italic"> Welcome to the website</span></p>
                @csrf
                <div class="mt-10 mb-0">
                   
                    <label for="username" class="block mb-2 text-base font-medium  dark:text-black"> USERNAME:</label>
                    <input type="text"  name="username"  class="dark:bg-gray-200 border border-black text-sm rounded-lg block w-full p-2.5  dark:border-blue-500 dark:placeholder-gray-600 dark:text-black" placeholder="estella@gmail.com" required><br><br>
                </div>
                <div class="mb-1">
                    <label for="password" class="block mb-2 text-black text-base font-medium ">PASSWORD:</label>
                    <input type="password"  name="password"  class="dark:bg-gray-200 border border-black text-sm rounded-lg block w-full p-2.5  dark:border-blue-500 dark:placeholder-gray-600 dark:text-black" placeholder="password" required"><br><br>
                </div>

                <button type="submit" value="login" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"">Login</button><br>
                <p class="text-black  text-base font-medium">Don't have an account click register</p>

                
            </form>
           
          
                    
            </div>
        </div>
    </div>
</div>
</body>
</html>
 