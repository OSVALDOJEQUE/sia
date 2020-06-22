
//Ocorrência



function removerConfirmar(id) {
        swal({
            // title: "Remover?",
            text: "Tem certeza que deseja remover este dado?",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Sim",
            cancelButtonText: "Não",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: 'ocorrencias/'+id+'/remover',
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        location.reload();
                        swal("Removido com sucesso", results.message, "success");
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }


//User
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('#users').DataTable({
        processing: false,
        serverSide: true,
        ajax: "users",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'category', name: 'category'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewUser').click(function () {
        $('#saveBtn').val("create-user");
        $('#user_id').val('');
        $('#user_form').trigger("reset");
        $('#createUser').modal('show');
    });
    
    $('body').on('click', '.editUser', function () {
      var user_id = $(this).data('id');
      $.get("users/"+user_id +'/edit', function (data) {
          $('#editUser').modal('show');
          $('#e_id').val(data.id);
          $('#e_name').val(data.name);
          $('#e_email').val(data.email);
          $('#e_category').val(data.category);
      })
   });
    


    $('body').on('click', '.deleteUser', function () {
     
        var user_id = $(this).data("id");
        swal({
            // title: "Remover?",
            text: "Tem certeza que deseja remover este dado?",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Sim",
            cancelButtonText: "Não",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'DELETE',
                    url:  "{{ route('users.store') }}"+'/'+user_id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                         table.draw();
                         swal("Removido com sucesso", results.message, "success");
                    },
                    error: function (data) {
                    console.log('Error:', data);
            }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    

    });



    