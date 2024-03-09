<?php
include("config.php");


$id = $_POST['id'];
$nome = $_POST['nome'];
$observacao = $_POST['observacao'];
$situacao = $_POST['situacao'];

$salvar = "UPDATE `bairros` SET `nome`='$nome', `observacao`='$observacao', `situacao`='$situacao' WHERE `id_bairros` = '$id'";
$query = mysqli_query($conn, $salvar);

if(!$query){
	echo("Algo deu errado... Tente novamente." . mysqli_error());
} else {
	header("Location: consulta_bairros.php");
}

?>