<?php
include("config.php");


$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$situacao = $_POST['situacao'];

$salvar = "UPDATE `usuarios` SET `nome`='$nome', `email`='$email', `situacao`='$situacao' WHERE `id_usuarios` = '$id'";
$query = mysqli_query($conn, $salvar);

if(!$query){
	echo("Algo deu errado... Tente novamente." . mysqli_error());
} else {
	header("Location: consulta_usuarios.php");
}

?>