<?php

$username = $_POST['usuario'];
$senha = $_POST['senha'];

$host = "localhost";
$usuario = "davi";
$senha2 = "1234";
$banco = "Cadastros";

//se conecta com o banco
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
  //verificando os dados que já estão no banco de dados
 	$resp = "Select * from Usuario where username='$username' and senha='$senha'";

 	$query = mysqli_query($link,$resp);

 	if($query){
 		 $resp_query = mysqli_fetch_assoc($query);
 	}
  /*pega todas as info da tupla username e senha*/
 	$username_repeat = $resp_query['username'];
 	$senha_repeat = $resp_query['senha'];
  $verifica = 0;

    if(($username == $username_repeat) and ($senha == $senha_repeat)){
        $verifica = 1;
    }
  if($verifica){
    header("location:pag.php");
  }
  if(!$verifica){
  echo  'Nome de usuario ou senha invalidos..';
  }

 ?>
