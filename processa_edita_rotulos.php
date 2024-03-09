<?php
include("config.php");


$id = $_POST['id'];
$nome = $_POST['nome'];
$observacao = $_POST['observacao'];
$situacao = $_POST['situacao'];

$salvar = "UPDATE `rotulos` SET `nome`='$nome', `observacao`='$observacao', `situacao`='$situacao' WHERE `id_rotulos` = '$id'";
$query = mysqli_query($conn, $salvar);

if(!$query){
	echo("Algo deu errado... Tente novamente." . mysqli_error());
} else {
	header("Location: consulta_rotulos.php");
}

?>