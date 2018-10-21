<?php 
	session_start();

	#Redireciona usuarios nao autenticados para a pagina de login.php
	$paginaAtual = strtolower($_SERVER['PHP_SELF']);
	if(!isset($_SESSION['usuario']) && $paginaAtual != '/login.php') {
		
		$parts = Explode('/', $paginaAtual);

		if ($parts[count($parts) - 1] == 'index.php')
			header("Location: pages/login.php");
		else
			header("Location: login.php");
		exit;
	}
?>