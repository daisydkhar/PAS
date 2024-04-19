function DeptDisplay() {
    $('#dept-table-body').empty();//after displaying once so these data will be clear so that when we click again those row will not repaeted

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
                        '<td class="px-4 py-2"><button type="button" value="'+value.dept_id+'" id="edit"  class="edit_dept bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg focus:outline-none">Edit</button></td>' +
                        '<td class="px-4 py-2"><button type="button" value="'+value.dept_id+'" id="del" class="delete_dept bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-lg focus:outline-none">Delete</button></td>' +
                        '</tr>';
                    $('#dept-table-body').append(row);
                });
                // Show the department table
                $('#dept-table').removeClass('hidden');
            }

            
        });
        }
