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