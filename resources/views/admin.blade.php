<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



    <title>Document</title>
</head>
<body>
    <form action="{{ route('admin.submit') }}" method="POSt">

        @csrf 
    <div class="bg-black h-screen"> 
    <nav class=" flex justify-between p-2 border-gray-200 dark:bg-gray-900">
        <i id="menubar" class="fa-solid fa-bars" style="font-size: 24px; color: white; margin-left: 10px;"></i>

        <h1 class="mb-2 text-2xl dark:text-white text-center font-semibold">Admin</h1>
        <button class=" text-white   bg-blue-900 focus:ring-4 rounded-lg text-1xl p-2 text-center ">Logout</button>

    </nav>
</form>


    <form action="{{ route('departmentdata.submit') }}" method="post">
        @csrf
        <aside id="sidebar" class="fixed top-15 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="flex flex-col w-56 min-h-lvh bg-blue-300">
                <button class="mb-2 mt-9 text-1xl text-black font-semibold" id="fetchdepartment">Department</button>
                <button class="mb-2 mt-9 text-1xl text-black font-semibold" id="fetchcourse">Course</button>
                <button class="mb-2 mt-9 text-1xl text-black font-semibold"  id="fetchuser">User</button>
                <button class="mb-2 mt-9 text-1xl text-black font-semibold" onclick="test">Test</button>
                <button class="mb-2 mt-9 text-1xl text-black font-semibold" onclick="mark">Mark</button>
                <button class="mb-2 mt-9 text-1xl text-black font-semibold" onclick="report">Report</button>
              
            </div>
         </aside>
        
        <!-- department table format -->
        <div id="dept-table" class="hidden  rounded-lg overflow-hidden px-3 mt-2">
     
            <table class="table table-dark table-bordered table-center  w-72 ml-7 mr-7 " 
            style="font-size: 0.8rem;">
      
                <thead>
                    <tr>
                        <th scope="col">Department ID</th>
                        <th scope="col">Department Name</th>
                        <th scope="col">Head of Department</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody id="dept-table-body"></tbody>
            </table>
        </div>
     
     <!-- course table format -->
     <form action="{{route('coursedata.submit')}}" method="POST">
        @csrf
     
        <div id="course-table" class="hidden  rounded-lg overflow-hidden px-3 mt-2 ">
     
            <table class="table table-dark table-bordered table-center  w-72 ml-7 mr-7  " 
                style="font-size: 0.8rem;">
     
                <thead>
                    <tr>
                        <th scope="col">Course ID</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody id="course-table-body"></tbody>
            </table>
        </div>
         

        <form action="{{ route('userdata.submit') }}" method="POST">
            @csrf
        
        
            <div id="user-table" class="hidden rounded-lg overflow-hidden px-1">
                    <table class="table table-dark table-bordered table-center" style="font-size: 0.8rem;">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>FirstName</th>
                            <th>MiddleName</th>
                            <th>LastName</th>
                            <th>Phone number</th>
                            <th>Address</th>
                            <th>Dob</th>
                            <th>gender</th>
                            <th>Yearofadmission</th>
                            <th>Rollnumber</th>
                            <th>Semester</th>
                            <th>YearOfJoining</th>
                            <th>role</th>
                            <th>Course</th>
                            <th>Department</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="user-table-body"></tbody>
                </table></
        
              
            </div>
        </form>
          
       
     </form>
     <!-- user table format -->

     
     


</form>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--using ajax to display without reload the page DEPARTMEnt
    <script src="{{ asset('js/department.js') }}"></script>

    <script src="{{ asset('js/course.js') }}"></script>--->



    
    
    <script>
        //to show and hide side bar
    $(document).ready(function() {
        $('#menubar').click(function() {
            $('#sidebar').toggleClass('hidden');
            $('#user-table').addClass('hidden');
            $('#dept-table').addClass('hidden');
            $('#course-table').addClass('hidden');
            

        });
    });

        // Function to hide all tables
    function hideAfterDisplay() {
        $('#dept-table').addClass('hidden');
        $('#course-table').addClass('hidden');
        $('#user-table').addClass('hidden');
        
    }
        //departments ajax 
        $(document).ready(function(){
        $('#fetchdepartment').click(function(e){
            e.preventDefault();
            $('#dept-table-body').empty();//after displaying once so these data will be clear so that when we click again those row will not repaeted
            $('#sidebar').toggleClass('hidden');
            hideAfterDisplay()//to hide this dept table when click course or others
            $.ajax({
                type:"POST",
                url: "{{ route('departmentdata.submit') }}",                
                data: {_token: "{{ csrf_token() }}"},
                dataType:"json",
                success:function(response){
                    //console.log(response);
                    $.each(response.$departments, function(index, value){
                        var hod = value.hod !== null ? value.hod : 'N/A';
                        var row = '<tr>' +
                            '<td class="px-4 py-2">' + value.dept_id + '</td>' +
                            '<td class="px-4 py-2">' + value.deptname + '</td>' +
                            '<td class="px-4 py-2">' + hod + '</td>' +
                            '<td class="px-4 py-2"><button type="button" value="" class="edit_dept bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg focus:outline-none">Edit</button></td>' +
                            '<td class="px-4 py-2"><button type="button" class="delete_dept bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-lg focus:outline-none">Delete</button></td>' +
                            '</tr>';
                        $('#dept-table-body').append(row);
                    });
                    // Show the department table
                    $('#dept-table').removeClass('hidden');
                }

                
            });
        });

    });


    //courses ajax 
    $(document).ready(function(){
        $('#fetchcourse').click(function(e){
            e.preventDefault();
            // Clear the existing table rows
           $('#course-table-body').empty();
           $('#sidebar').toggleClass('hidden');
            hideAfterDisplay()//to hide this course table when click course or others
            $.ajax({
                type:"POST",
                url: "{{ route('coursedata.submit') }}",
                data: {_token: "{{ csrf_token() }}"},
                dataType:"json",
                success:function(response){
                    //console.log(response);
                    $.each(response.$courses, function(index, value){

                        var row = '<tr>' +
                            '<td class="px-4 py-2">' + value.course_id + '</td>' +
                            '<td class="px-4 py-2">' + value.coursename + '</td>' +
                            '<td class="px-4 py-2">' + value.duration + '</td>' +
                            '<td class="px-4 py-2"><button type="button" value="" class="edit_dept bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg focus:outline-none">Edit</button></td>' +
                            '<td class="px-4 py-2"><button type="button" class="delete_dept bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-lg focus:outline-none">Delete</button></td>' +
                            '</tr>';
                        $('#course-table-body').append(row);
                    });
                    // Show the department table
                    $('#course-table').removeClass('hidden');
                }

                
            });
        });

    });

    //Userdata ajax 
    $(document).ready(function(){
    $('#fetchuser').click(function(e){
        e.preventDefault();
        $('#user-table-body').empty();
        $('#sidebar').toggleClass('hidden');
        hideAfterDisplay();
        $.ajax({
            type: "POST",
            url: "{{ route('userdata.submit') }}",
            data: {_token: "{{ csrf_token() }}"},
            dataType: "json",
            success: function(response){
                $.each(response.$userdata, function(index, value){
                    var row = '<tr>' +
                        '<td class="px-1 py-2">' + value.userID + '</td>' +
                        '<td class="px-1 py-2">' + value.email + '</td>' +
                        '<td class="px-1 py-2">' + value.password + '</td>' +
                        '<td class="px-1 py-2">' + value.firstname + '</td>' +
                        '<td class="px-1 py-2">' + value.middlename + '</td>' +
                        '<td class="px-1 py-2">' + value.lastname + '</td>' +
                        '<td class="px-1 py-2">' + value.phno + '</td>' +
                        '<td class="px-1 py-2">' + value.address + '</td>' +
                        '<td class="px-1 py-2">' + value.dob + '</td>' +
                        '<td class="px-1 py-2">' + value.gender + '</td>' +
                        '<td class="px-1 py-2">' + value.yearOfAd + '</td>' +
                        '<td class="px-1 py-2">' + value.rollno + '</td>' + // Add this line
                        '<td class="px-1 py-2">' + value.semester + '</td>' + // Add this line
                        '<td class="px-1 py-2">' + value.yearofJoining + '</td>' + // Add this line
                        '<td class="px-1 py-2">' + value.rolefk + '</td>' +
                        '<td class="px-1 py-2">' + value.course + '</td>' +
                        '<td class="px-1 py-2">' + value.department + '</td>' +
                        '<td class="px-1 py-2"><button type="button" value="" class="edit_dept bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg focus:outline-none">Edit</button></td>' +
                        '<td class="px-1 py-2"><button type="button" class="delete_dept bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-lg focus:outline-none">Delete</button></td>' +
                        '</tr>';
                    $('#user-table-body').append(row);
                });
                $('#user-table').removeClass('hidden');

            }
        });
    });
});
</script>
        
        
        
</body>
</html>
=======
>>>>>>> 99ad6b3 (updating)
