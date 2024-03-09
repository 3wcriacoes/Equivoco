<?php 
include "config.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>AUTENTICANDO USUÁRIO</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./css/authentication.css"/>
	
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='home.php'",4000);
		}
		
		function loginfailed(){
			setTimeout("window.location='index.php'",4000);
		}
	</script>
</head>
<body>
	<section>
		<div class="container">
			<img src="./images/equivoco2.jpg">
				<div class="login">
					<?php
						$email = $_POST['email'];
						$senha = $_POST['senha'];
						
						$sql = $conn->query("SELECT * FROM usuarios WHERE email = '".$email."' and senha = '".$senha."'");
						$row = mysqli_num_rows($sql);
						
						if($row > 0){
							session_start();
							$_SESSION['email'] = $_POST['email'];
							$_SESSION['senha'] = $_POST['senha'];
							
							echo "<center>CONEXÃO OK, AGUARDE</center>";
							echo "<script>loginsuccessfully()</script>";
						}else{
							echo "<center>SENHA OU USUÁRIO INVÁLIDOS!!!</center>";
							echo "<center>TENTE NOVAMENTE</center>";
							echo "<script>loginfailed()</script>";
						}
					?>
				</div>
		</div>
	</section>
</body>
</html>