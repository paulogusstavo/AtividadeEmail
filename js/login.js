$( document ).ready(function() {

    $( "#caixa_entrada" ).click(function() {
      mostrarDados("Caixa de entrada");
      //window.location.href = window.location.href.replace( /[\?#].*|$/, "?pasta=caixa+de+entrada" );
    });

    $( "#enviadas" ).click(function() {
      mostrarDados("Enviadas");
      //window.location.href = window.location.href.replace( /[\?#].*|$/, "?pasta=enviadas" );
    });

    $( "#excluidos" ).click(function() {
      mostrarDados("Excluidos");
      //window.location.href = window.location.href.replace( /[\?#].*|$/, "?pasta=excluidos" );
    });

    $( "#nova_mensagem" ).click(function() {
      // $.ajax({
      //     url: 'pages/novaMensagem2.php'
      // }).done(function(data) {
      //     $('#nova_msg').append(data);
      // });
      // window.location.href = window.location.href.replace( /[\?#].*|$/, "?pasta=nova+mensagem" );

      // $('#nova_msg').load('pages/novaMensagem.php');
    });


    // $("#formLogin").validate({
    //     errorElement: 'span',
    //     errorClass: 'invalid',
    //     validClass: 'valid',
    //     rules: {
    //         usuario: {
    //         required: true
    //         },
    //         senha: {
    //             required: true,
    //             minlength: 5
    //         }
    //     },
    //     messages: {
    //         usuario: {
    //             required: "Insira seu usuário."
    //         },
    //         senha: {
    //             required: "Insira sua senha.",
    //             minlength: "Mínimo de 5 caracteres"
    //         }
    //       },
    //     submitHandler: function(form) {
    //         $('#submit').attr('disabled','disabled');
    //         form.submit();
    //     }
    // });
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

      $("#titulo").html($URL);
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


