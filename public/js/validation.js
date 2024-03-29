$("#user_form").validate({
      
    rules: {
      name: {
        required: true,
        maxlength:50,
        minlength:3,
      },

       email: {
        required: true,
        email: true,
      },
  
      password: {
            required:true,
            minlength:6,
            maxlength:32,
      },

      confirm_password:{
       required:true,
       minlength:6,
       maxlength:32,
       equalTo: "#password",
      },

      category:{
        required:true,

        },

    },

    messages: {
        
      name: {
        required: "Este campo é obrigatório",
        maxlength: "O nome deve conter  no máximo 50 caracteres ",
        minlength: "O nome deve conter  pelo menos 3 caracteres",
      },
   
       email: {
        required: "Este campo é obrigatório",
        email: "Introduza um email valido",
      },
      password: {
        required: "Este campo é obrigatório",
        minlength:"A senha deve conter no mínimo 6 caracteres",
        maxlength: "O nome deve conter  no máximo 32 caracteres ",
      },

      confirm_password:{
        required:"Este campo é obrigatório",
        minlength:"A senha deve conter no mínimo 6 caracteres",
        maxlength: "O nome deve conter  no máximo 32 caracteres ",
        equalTo: "As senhas não conscidem",
      },

        category:{
        required:"Este campo é obrigatório",

        },
         
    },

    submitHandler: function(form){
    	$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    	});    	  

    	  $.ajax({
          data: $(form).serialize(),
          url: "users",
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $(form).trigger("reset");
              $('#createUser').modal('hide');
              table.draw();
              swal("Salvo com sucesso", data.message, "success");
         
         
          },
          error: function (data) {  
              $('.alert-danger').html('');
              $.each(data.responseJSON.errors, function(key, value) {
                $('.alert-danger').show();
                $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
              });
          }
      });

    }

  });

$("#user_edit_form").validate({
      
    rules: {
      name: {
        required: true,
        maxlength:50,
        minlength:3,
      },

       email: {
        required: true,
        email: true,
      },
  
      password: {
            minlength:6,
            maxlength:32,
      },

      confirm_password:{
       minlength:6,
       maxlength:32,
       equalTo: "#password",

      },

      category:{
        required:true,

        },

    },

    messages: {
        
      name: {
        required: "Este campo é obrigatório",
        maxlength: "O nome deve conter  no máximo 50 caracteres ",
        minlength: "O nome deve conter  pelo menos 3 caracteres",
      },
   
       email: {
        required: "Este campo é obrigatório",
        email: "Introduza um email valido",
      },
      password: {
        minlength:"A senha deve conter no mínimo 6 caracteres",
        maxlength: "O nome deve conter  no máximo 32 caracteres ",
      },

      confirm_password:{
        minlength:"A senha deve conter no mínimo 6 caracteres",
        maxlength: "O nome deve conter  no máximo 32 caracteres ",
        equalTo: "As senhas não conscidem",
      },

        category:{
        required:"Este campo é obrigatório",

        },
         
    },

    submitHandler: function(form){
    	$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    	});    	  

    	  $.ajax({
          data: $(form).serialize(),
          url: "users",
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $(form).trigger("reset");
              $('#editUser').modal('hide');
              table.draw();
             swal("Actualizado com sucesso", data.message, "success");
         
         
          },
          error: function (data) {  
          	console.log('error',data);
              $('.alert-danger').html('');
              $.each(data.responseJSON.errors, function(key, value) {
                $('.alert-danger').show();
                $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
              });
          }
      });

    }

  });


    $("#perfil_form ").validate({
      
    rules: {
      name: {
        required: true,
        maxlength:50,
        minlength:3,
      },

       email: {
        required: true,
        email: true,
      },
  
      password: {
            minlength:6,
            maxlength:32,
      },

      confirm_password:{
        minlength:6,
        maxlength:32,
        equalTo: "#password"

      },

    },

    messages: {
        
      name: {
        required: "Este campo é obrigatório",
        maxlength: "O nome deve conter  no máximo 50 caracteres ",
        minlength: "O nome deve conter  pelo menos 3 caracteres",
      },
   
       email: {
        required: "Este campo é obrigatório",
        email: "Introduza um email valido",
      },


      password: {
        minlength:"A senha deve conter no mínimo 6 caracteres",
        maxlength: "O nome deve conter  no máximo 32 caracteres ",
      },

      confirm_password:{
        minlength:"A senha deve conter no mínimo 6 caracteres",
        maxlength: "O nome deve conter  no máximo 32 caracteres ",
        equalTo: "As senhas não conscidem",
      },
         
    },

  
  })


 if ($("#login_form").length > 0) {
    $("#login_form").validate({
      
    rules: {
      email: {
        required: true,
      },
      confirm_password:{
        required:true,
      },

        password: {
        required: true,
        minlength:6,
        maxlength:32,
      },
    },
        
    messages: {
        email: {
         required: "Este campo é obrigatório",
        
        },

        password: {
        required: "Este campo é obrigatório",
        minlength:"A senha deve conter no mínimo 6 caracteres",
        maxlength: "A senha deve conter no máximo 32 caracteres ",
      },
      confirm_password:{
        required:"Este campo é obrigatório",
      },

    },

  });
    
}


 if ($("#resetPassword_form").length > 0) {
    $("#resetPassword_form").validate({
      
    rules: {
     
      confirm_password:{
        required:true,
      },

        password: {
        required: true,
        minlength:6,
        maxlength:32,
      },
    },
        
    messages: {
     
        password: {
        required: "Este campo é obrigatório",
        minlength:"A senha deve conter no mínimo 6 caracteres",
        maxlength: "A senha deve conter no máximo 32 caracteres ",
      },
      confirm_password:{
        required:"Este campo é obrigatório",
      },

    },

  });
    
}


    $("#partilhar_form").validate({
      
    rules: {  
     comentario:{
       required:true,
     },
      permission:{
        required:true,
      },
    },
        
    messages: {
      permission:{
        required:"Este campo é obrigatório",
      },

       comentario:{
        required:"Este campo é obrigatório",
      },

    },

  });

  $("#alocar_form").validate({
      
    rules: {  
     comentario:{
       required:true,
     },
      jurista:{
        required:true,
      },
    },
        
    messages: {
      
       comentario:{
        required:"Este campo é obrigatório",
      },

        jurista:{
        required:"Este campo é obrigatório",
      },


    },

  });

    $("#provincia_form").validate({
      
    rules: {  
     provincia:{
       required:true,
     },
   },
         
    messages: {

        provincia:{
        required:"Este campo é obrigatório",
      },


    },

  });

 $("#ocorrencia_form").validate({
      
    rules: {

     serie:{
       required:true,
     },
     provincia:{
       required:true,
     },

     nivel:{
       required:true,
     },
   },
         
    messages: {

      serie:{
        required:"Este campo é obrigatório",
      },

      provincia:{
        required:"Este campo é obrigatório",
      },

       nivel:{
        required:"Este campo é obrigatório",
      },
    },

  });
    


$("#jornalista_form").validate({
      
    rules: {
      nome: {
        required: true,
        maxlength:50,
        minlength:3,
      },

      celular: {
        required: true,
        digits: true,
      },
  
       email: {
        required: true,
        email: true,
      },

      contacto:{
        required:true,
        digits:true,
        },
        
      entidade:{
        required:true
      }

    },

    messages: {
        
      nome: {
        required: "Este campo é obrigatório",
        maxlength: "O nome deve conter  no máximo 50 caracteres ",
        minlength: "O nome deve conter  pelo menos 3 caracteres",
      },

      celular: {
        required: "Este campo é obrigatório",
        digits: "Introduza um número de telefone válido",
      },
   
       email: {
        required: "Este campo é obrigatório",
        email: "Introduza um email valido",
      },

      contacto:{
        required: "Este campo é obrigatório",
        digits:"Introduza um número de telefone válido",

        },
      entidade:{
        required:"Este campo é obrigatório"
      }
 
         
    },

    submitHandler: function(form){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });       

        $.ajax({
          data: $(form).serialize(),
          url: "jornalistas/"+$("#id").val(),
          type: "PUT",
          dataType: 'json',
          success: function (data) {

              $(form).trigger("reset");
              $('#editJornalista').modal('hide');
              jornalistas.draw();
             swal("Actualizado com sucesso", data.message, "success");
         
         
          },
          error: function (data) {  
            console.log('error',data);
              $('.alert-danger').html('');
              $.each(data.responseJSON.errors, function(key, value) {
                $('.alert-danger').show();
                $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
              });
          }
      });

    }

  });

//Confirmação do password

function check() {
    if(document.getElementById('password').value ===
        document.getElementById('confirm_password').value) {
        document.getElementById('message').innerHTML = " ";
    } else {
        document.getElementById('message').innerHTML = "As senhas não conscidem! Tente novamente.";
    }

}

  function checkConfirmPassword(form)
  {
    if(document.getElementById('password').value === document.getElementById('confirm_password').value)
      return true;
    
    return false;
  
  }
  


