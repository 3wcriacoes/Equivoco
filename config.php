<?php

/* Define informações de acesso ao banco */

$host = "localhost";
$user = "root";
$password = "";
$dataBase = "equivoco";

//Criar a conexão
$conn = mysqli_connect($host,$user,$password,$dataBase);

mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET character_set_connection=utf8');
mysqli_query($conn,'SET character_set_client=utf8');
mysqli_query($conn,'SET character_set_results=utf8');

if(!$conn){
	die ("Falha de Conexão: " . mysqli_connect_error());
}else{
	//echo "Conexão realizada com sucesso";
}

?>
