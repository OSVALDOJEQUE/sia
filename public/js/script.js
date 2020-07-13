
//Ocorrência

function removerConfirmar(id) {
        swal({
            // title: "Remover?",
            text: "Tem certeza que deseja remover este registo?",
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
                    url: '/ocorrencias/'+id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (data) { 
                     swal("Removido com sucesso", "Alerta", "success");
                     location.reload();
                    },
                    error: function (data) {
                    console.log('Error:', data);
                      swal({
                        text: "Este registo não pode ser removido!",
                        type: "warning",
                        delay:1500,
                      });
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
            text: "Tem certeza que deseja remover este registo?",
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
                    url:  "/users/"+user_id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (data) {
                         table.draw();
                         swal("Removido com sucesso", "Alerta", "success");
                    },
                    error: function (data) {
                    console.log('Error:', data);
                     swal({
                        text: "Este registo não pode ser removido!",
                        type: "warning",
                        delay:1500,
                      });
            }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    

    });


        var jornalistas= $('#jornalistas').DataTable({
        processing: false,
        serverSide: true,
        ajax: "jornalistas",
        columns: [

            {data: 'nome', name: 'nome'},
            {data: 'celular', name: 'celular'},
            {data: 'email', name: 'email'},
            {data: 'estado', name:'estado'},
            {data: 'modelo', name:'modelo'},
            {data: 'plataforma', name:'plataforma'},
            {data: 'uuid', name:'uuid'},
            {data: 'versao', name:'versao'},
            {data: 'serie', name:'serie'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });


      $('body').on('click', '.aprovar', function () {
      var jornalista_id= $(this).data('id');
       
       $.ajax({
                    type: 'PUT',
                    url:  "/jornalistas/"+jornalista_id,
                    dataType: 'JSON',
                    success: function (data) {
                         jornalistas.draw();
                         swal("Aprovado com sucesso", "Alerta", "success");
                    },
                    error: function (data) {
                    console.log('Error:', data);
            }
                });
   });


    $('body').on('click', '.removerJornalista', function () {
     
        var jornalista_id= $(this).data("id");
        swal({
            // title: "Remover?",
            text: "Tem certeza que deseja remover este registo?",
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
                    url:  "/jornalistas/"+jornalista_id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (data) {
                         jornalistas.draw();
                         swal("Removido com sucesso","Alerta", "success");
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



     



    