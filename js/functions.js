$( document ).ready(function() {

    $( "#caixa_entrada" ).click(function() {
      mostrarDados("Caixa de entrada");
    });

    $( "#enviadas" ).click(function() {
      mostrarDados("Enviadas");
    });

    $( "#excluidos" ).click(function() {
      mostrarDados("Excluidos");
    });

    $( "#nova_mensagem" ).click(function() {
      $.get('pages/novaMensagem.php', function (data) {
          $("#novaMensagem").html(data);
      });
      
      $("#tabelaMensagens").empty();
      $("#titulo").html("Nova mensagem");
      
    });

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

function mostrarDados($URL){

  $.ajax({
    type: "POST",
    dataType: "json",
    data: {"pasta":$URL},
    url: "pages/mostrarMensagens.php",
    success:function(retorno){

      var html = "";

      for(var i = 0; i < retorno.length; i++){

        html += "<tr>";
        html += "<td class='cutText' style='--size: 15%;'><b>"+retorno[i]["para"]+"</b></td>";
        html += "<td class='cutText' style='--size: 15%;'><b>Assunto: "+retorno[i]["assunto"]+"</b></td>";
        html += "<td class='cutText' style='--size: 60%;'>"+retorno[i]["texto"]+"</td>";
        html += "</tr>";
      }

      $("#tabelaMensagens").html(html);
      $("#novaMensagem").empty();
      $("#titulo").html($URL);
    },
    error: function (request, status, error) {
      alert(request.responseText);
    }
  });
}


function criarNovaMensagem() {

  $.ajax({
    type: "POST",
    dataType: "text",
    data: {"para":$("#para").val(), "cc":$("#cc").val() , 
    "assunto": $("#assunto").val(), "conteudo":$("#conteudo").val()},
    url: "pages/criarMensagem.php",
    success:function(retorno){
      
      exibirToast("success", "Sua mensagem foi enviada!");
      mostrarDados("Caixa de entrada");

    },
    error: function (request, status, error) {
      alert(request.responseText);
    }
  });
  
}

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


