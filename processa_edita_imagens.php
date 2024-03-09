<?php
include("config.php");

if (mysqli_connect_error()) {
	echo "Falha ao conectar no Banco de Dados";
} else {
	if (isset($_POST['salvar'])) {
		$id = $_POST['id_imagens'];
		$descricao = $_POST['descricao'];
		$localizacao = $_POST['localizacao'];
		$observacao = $_POST['observacao'];
		$id_bairros = $_POST['id_bairros'];
		$id_rotulos = $_POST['id_rotulos'];
		$situacao = $_POST['situacao'];


		$salvar = "UPDATE imagens SET descricao='$descricao', localizacao='$localizacao', observacao='$observacao', id_bairros='$id_bairros', id_rotulos='$id_rotulos', situacao='$situacao' WHERE id_imagens = $id";

		$result = $conn->query($salvar)OR trigger_error($conn->error, E_USER_ERROR);
                        //echo 'Arquivo enviado com sucesso';

		if(!$result){
			echo("Algo deu errado... Tente novamente." . mysqli_error());
		} else {
			header("Location: consulta_imagens.php");
		}
	}
}
?>