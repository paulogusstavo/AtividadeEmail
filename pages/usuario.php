<?php

class Usuario {
	
	private $usuario;
	private $senha;
	
	function __construct($usuario, $senha) {
		$this->usuario = $usuario;
		$this->senha = $senha;
	}
	
	# Tenta autenticar o usuario. Retorna 0 ou 1 indicando falha ou sucesso.
	function login() {
		
		$usuariosXML = simplexml_load_file("../files/usuarios.xml");
		$auth=false;

		foreach ($usuariosXML->usuario as $user) {

			if (($user->login) == $this->usuario) {
				$auth = (($user->senha) == md5($this->senha)) ? true : false;
				//break;
			}
		}

		if($auth) {
			$_SESSION['usuario'] = $this->usuario;
		}
		
		return $auth;
	}
	
}
?>