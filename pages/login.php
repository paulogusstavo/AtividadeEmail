<!DOCTYPE html>
	<html>
		<head>
  			<meta charset="UTF-8">
  			<title>Email - Login</title>
  			
  			<script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
			<script src="../js/login.js" type="text/javascript"></script>
			<script src="../js/jquery.validate.min.js" type="text/javascript"></script>

			<link rel="stylesheet" href="../css/login.css">
		
		</head>
	<body>	
		<div class="titulo">
  			<h1>PAULO'S EMAIL</h1>
  			<span>Atividade Semestral - Programação WEB</span>
		</div>

		<div class="dadosAcesso">
  		<div class="form">
    		<h2>Acesso ao sistema</h2>
    		<form id="formLogin" action="Login.php" method="POST">

    			<div>
    				<input type="text" placeholder="Usuário" name="usuario" id="usuario" />
    				<span></span>
    			</div>
    			<div>
    				<input type="password" placeholder="Senha" name="senha" id="senha" />
    				<span></span>
    			</div>
      	
      			<button>Entrar</button>
    		</form>
  		</div>
</div>

	</body>
</html>

		
	
		
