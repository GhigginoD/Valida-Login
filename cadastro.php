<html>
<head>
  
  <meta charset="utf-8">
</head>
<body>
<a href="login.html"> Entre para fazer o login </a>
<p>
</body>
</html>

<?php

$username = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];

	$host = "localhost";
	$usuario = "davi";
	$senha2 = "1234";
	$banco = "Cadastros";


	/* abre a conexão */

	$link = mysqli_connect($host,$usuario,$senha2);
	if(!$link)
	{
		/* não conseguiu abrir a conexão */
		echo mysqli_error();
		die();
	}

	/* seleciona o banco de dados */
	if(!mysqli_select_db($link, $banco)){
		// não conseguiu se conectar

		echo mysqli_error();
		mysqli_close($link);
		die();
	}

/* enviando a consulta para o banco de dados */
$resp = "insert into Usuario(username, senha,email) values ('$username', '$senha','$email')";
$query = mysqli_query($link, $resp);

	if($query){
    echo 'conta criada com sucesso';
  }else{
		/* erro ao executar a consulta */
    echo 'usuario já cadastrado..';
		echo mysqli_error();
		die();
	}

	// fecha a conexão
	mysql_close($link);

?>
