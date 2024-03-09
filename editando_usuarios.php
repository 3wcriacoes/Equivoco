<?php
include("config.php");
?>
<!doctype html>
<html>
<head>
	<meta content="text/html; charset="iso-8859-1" />
	<title>Edição de Rótulos</title>

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
				
				$busca = "SELECT * FROM `usuarios` WHERE `id_usuarios` = '$identificador'";
				$sql = mysqli_query($conn, $busca);
				while($linha = mysqli_fetch_array($sql)){
					
					$id_usuarios = $linha['id_usuarios'];
					$nome = $linha['nome'];
					$email = $linha['email'];
					$situacao = $linha['situacao'];
					
					echo("
						<form action='processa_edita_usuarios.php' method='POST'>
						<p><strong>EDITAR DADOS DO USUÁRIO</strong></p>
						<table>
						<tr>
						<td id='content'><input type='hidden' name='id' value='" . $id_usuarios . "' /></td>
						</tr>
						<tr>
						<td id='content'><label>Nome</label></td>
						</tr>
						<tr>
						<td id='content'><input type='text' name='nome' value='" . $nome . "' /></td>
						</tr>
						<tr>
						<td id='content'><label>Email</label></td>
						</tr>
						<tr>
						<td id='content'><input type='text' name='email' value='" . $email . "' /><br /></td>
						</tr>
						<tr>
						<td id='checkbox'><label>Situação:</label></td>
						</tr>
						<tr>
						<td id='checkbox'><label>Ativo</label><input type='checkbox' name='situacao' value='1' checked='TRUE'></td>
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