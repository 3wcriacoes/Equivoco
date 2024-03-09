<?php

/* Define informações de acesso ao banco */
$host = "localhost";
$user = "root";
$password = "";
$dataBase = "equivoco";

//Conectar ao banco de dados
$mysqli = new mysqli($host, $user, $password, $dataBase);
print_r($_POST);
if (mysqli_connect_error()) {
	echo "Falha ao conectar";

//Conecta e executa a instrução
	$result = $mysqli->query($query)OR trigger_error($mysqli->error, E_USER_ERROR);

//Desconecta com o banco
	mysqli_close($mysqli);
}
?>
