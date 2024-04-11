function fetchDepartmentData() {
  $(document).ready(function(){
    $('#fetchdepartment').click(function(e){
        e.preventDefault();
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

}