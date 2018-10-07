$( document ).ready(function() {
    $("#formLogin").validate({
        errorElement: 'span',
        errorClass: 'invalid',
        validClass: 'valid',
        rules: {
            usuario: {
            required: true
            },
            senha: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            usuario: {
                required: "Insira seu usuário."
            },
            senha: {
                required: "Insira sua senha.",
                minlength: "Mínimo de 5 caracteres"
            }
          },
        submitHandler: function(form) {
            $('#submit').attr('disabled','disabled');
            form.submit();
        }
    });
});

// TOAST
function exibirToast ($tipo, $msg) {
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "200",
      "hideDuration": "1000",
      "timeOut": "3000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    toastr[$tipo]($msg, "Paulo's Email")
}


