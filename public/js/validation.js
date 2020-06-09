

if ($("#user_form_edit").length > 0) {
    $("#user_form_edit").validate({
      
    rules: {
      first_name: {
        required: true,
        maxlength:50,
        minlength:3,
      },

      surname: {
        required: true,
        maxlength:50,
        minlength:3,
      },

       email: {
        required: true,
        email: true,
      },
      password: {
          minlength:8,
          maxlength:32,
        },
        contact: {
                required: true,
                digits:true,
            },

        provincial_comand: {
          required:true,

        },

    },

    messages: {
        
      first_name: {
        required: "*",
        maxlength: "O nome deve conter  no máximo 50 caracteres ",
        minlength: "O nome deve conter  pelo menos 3 caracteres",
      },
         surname: {
        required: "*",
        maxlength: "O nome deve conter  no máximo 50 caracteres ",
        minlength: "O nome deve conter  pelo menos 3 caracteres",
      },
       email: {
        required: "*",
        email: "Introduza um email valido",
      },
      password: {
        minlength:"A senha deve conter no mínimo 8 caracteres",
        maxlength: "O nome deve conter  no máximo 32 caracteres ",
      },

      contact: {
          required: "*",
          digits: "O celular deve conter apenas digitos",
        },

        provincial_comand:{
        required:"*",

        },
         
    },

  })
}


if ($("#user_form").length > 0) {
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
            minlength:8,
            maxlength:32,
      },

      confirm_password:{
        required:true,
      },
      category: {
            required: true,
            digits:true,
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
        minlength:"A senha deve conter no mínimo 8 caracteres",
        maxlength: "O nome deve conter  no máximo 32 caracteres ",
      },

      confirm_password:{
        required:"Este campo é obrigatório",
      },

        category:{
        required:"Este campo é obrigatório",

        },
         
    },

  })
}

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

//Confirmação do password

function check() {
    if(document.getElementById('password').value ===
        document.getElementById('confirm_password').value) {
        document.getElementById('message').innerHTML = " ";
        // document.getElementById("submit").disabled = false;
    } else {
        document.getElementById('message').innerHTML = "As senhas não conscidem! Tente novamente.";
        // document.getElementById("submit").disabled = true;
    }

}

  function checkConfirmPassword(form)
  {
    if(document.getElementById('password').value === document.getElementById('confirm_password').value)
      return true;
    
    return false;
  
  }
  



// var form = document.getElementById('resetPassword_form');
// form.addEventListener('submit', function(event) {
//         document.getElementById("submit").disabled = true;
//         check();
// });


// var form = document.getElementById('user_form');
// form.addEventListener('submit', function(event) {
//         check();
// }, false);

// var form = document.getElementById('user_form_edit');
// form.addEventListener('submit', function(event) {
//       check();
// });


