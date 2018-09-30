$(document).ready(function() {
  $("#formLogin").validate({
    debug: true,
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
    }
  });
});