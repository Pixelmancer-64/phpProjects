<?php
$dsn="mysql:host=localhost;dbname=cinedesweb";
$user="root";
$pass="wamp";

try{
	$conexao = new PDO($dsn, $user, $pass);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	var_dump($conexao);
}

catch(PDOException $e){
	$resposta["erro"] = true;
	$resposta["msgErro"] = "ERRO AO CONECTAR".$e->getMessage();
	echo json_encode($resposta);
	exit();
}
?>
