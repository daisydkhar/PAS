function CourseDisplay() {
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
                  '<td class="px-4 py-2"><button type="button" value="" class="edit_course bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg focus:outline-none">Edit</button></td>' +
                  '<td class="px-4 py-2"><button type="button" class="delete_dept bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-lg focus:outline-none">Delete</button></td>' +
                  '</tr>';
              $('#course-table-body').append(row);
          });
          // Show the department table
          $('#course-table').removeClass('hidden');
      }

      
  });
  }
