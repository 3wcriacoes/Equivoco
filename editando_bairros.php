<?php
include("config.php");
?>
<!doctype html>
<html>
<head>
	<meta content="text/html; charset="iso-8859-1" />
	<title>Edição de Bairros</title>

	<link rel="stylesheet" href="./css/editar.css"/>



</head>

<body>

	<div id="main">

		<?php
		include_once "topo.php"
		?>
		<?php
		include_once "nav_on.php"
		?>



		<div id="editar_btn">
			<div id="editar1">	


				<?php
				$identificador = $_GET['id'];
				
				$consulta_bairros = "SELECT * FROM `bairros` WHERE `id_bairros` = '$identificador'";
				$resultado = mysqli_query($conn, $consulta_bairros);
				while($linha = mysqli_fetch_array($resultado)){
					
					$id_bairros = $linha['id_bairros'];
					$nome = $linha['nome'];
					$observacao = $linha['observacao'];
					$situacao = $linha['situacao'];
					
					echo("
						<form action='processa_edita_bairros.php' method='POST'>
						<p><strong>EDITAR DADOS DO BAIRRO</strong></p>
						<table>
						<tr>
						<td id='content'><input type='hidden' name='id' value='" . $id_bairros . "' /></td>
						</tr>
						<tr>
						<td id='content'><label>Nome</label></td>
						</tr>
						<tr>
						<td id='content'><input type='text' name='nome' value='" . $nome . "' /></td>
						</tr>
						<tr>
						<td id='content'><label>Observação</label></td>
						</tr>
						<tr>
						<td id='content'><input type='text' name='observacao' value='" . $observacao . "' /><br /></td>
						</tr>
						<tr>
						<td id='checkbox'><label>Situação:</label></td>
						</tr>
						<tr>
						<td id='checkbox'><label>Ativo</label><input type='checkbox' name='situacao' id='situacao' value='1' checked='TRUE' /></td>
						</tr>
						<tr>
						<td>
						<input type='submit' value='Salvar' class='btn'>
						</td>
						</tr>
						</form>
						");
					
				}
				
				?>
				
			</table>
		</div>
	</div>
</div>
<?php
include_once 'footer.php';
?>
</body>


</html>