<?php
include("config.php");


$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$situacao = $_POST['situacao'];

$salvar = "UPDATE `integrantes` SET `nome`='$nome', `email`='$email', `telefone`='$telefone', `situacao`='$situacao' WHERE `id_integrantes` = '$id'";
$query = mysqli_query($conn, $salvar);

if(!$query){
	echo("Algo deu errado... Tente novamente." . mysql_error());
} else {
	header("Location: consulta_integrantes.php");
}

?>