

<?php


$dia = $_GET['dia'];
$anotacao = $_GET['anotacao'];
$cor = $_GET['cor'];

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
$resp = "insert into Agenda (data,anotacao,cor) values ('$dia', '$anotacao','$cor')";
$query = mysqli_query($link, $resp);

	if($query){
		header("location:pag.php");
  }else{
		/* erro ao executar a consulta */
    echo '2';
  }

	// fecha a conexão
	mysql_close($link);

?>
