<?php
	
	$diretorio = "../files/mensagens/".$_POST["pasta"]."/";
	// $diretorio = "../files/mensagens/enviadas/";
	$arquivos = array_diff(scandir($diretorio), array('..', '.', '.DS_Store'));

	$i=0;

	foreach ($arquivos as $arquivo) { //Interacao com cada mensagem.
		$mensagemXML = simplexml_load_file($diretorio.$arquivo);
		
		$retorno[$i]["para"] = trim($mensagemXML->para);
		$retorno[$i]["assunto"] = trim($mensagemXML->assunto);
		$retorno[$i]["texto"] = trim($mensagemXML->texto);

		$i++;
	}

	echo json_encode($retorno);

?>
