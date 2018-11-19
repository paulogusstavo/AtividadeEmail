<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="../js/functions.js" type="text/javascript"></script>

</head>
<body>

		<table class="newTabela" cellspacing="10">	
			<tr>
				<td colspan="2">
					<button class="newMensagem" tabindex="-1">Para</button>  <input class="assuntos" type="text" id="para" size="128">
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<button class="newMensagem" tabindex="-1">Cc</button>  <input class="assuntos" type="text" id="cc" size="130">
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<button class="newMensagem" tabindex="-1">Assunto</button> <input class="assuntos" type="text" id="assunto" size="125">
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<textarea class="assuntos" rows="10" cols="92" maxlength="200" placeholder="Adicione uma mensagem" id="conteudo"></textarea>
				</td>
			</tr>

			<tr>
				<td>
					<button id="criarNovaMensagem" class="newBotao" onclick="criarNovaMensagem()">Enviar</button>
				</td>
				<td>
					<button class="newBotao">Anexar</button> <button class="newBotao">Descartar</button>
				</td>
			</tr>

		</table>

</body>
</html>