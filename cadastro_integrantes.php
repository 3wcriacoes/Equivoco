<?php 
include "restricao_login.php";
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Bairros</title>

    <link rel="stylesheet" href="./css/cadastrar.css"/>
</head>

<body>
    <section>
        <div class="header">

            <?php
            include_once "topo.php"
            ?>
		</div>
		<div class="nav">
            <?php
            include_once "nav_on.php"
            ?>
		</div>
            <div id="content_btn">
                <div class="cadastro">
                <?php
                include "classeIntegrantes.php";
                include "config.php";

                if (mysqli_connect_error()) {
                    echo "Falha ao conectar no Banco de Dados";
                } else {

                    if (isset($_POST['salvar'])) {
                        if ($_POST['id_integrantes'] == "") {
                            $nome = $_POST['nome'];
                            $apelido = $_POST['apelido'];
                            $email = $_POST['email'];
                            $telefone = $_POST['telefone'];
                            $municipio = $_POST['municipio'];
                            $situacao = $_POST['1'];

                    //salva o registro na base de dados
                    //Forma a instrução
                            $query = "INSERT INTO integrantes (nome, apelido, email, telefone, municipio, situacao) VALUES ('$nome', '$apelido','$email','$telefone','$municipio','1')";
                            
                            header("Location: cadastro_integrantes.php");
                        }
                        $result = $conn->query($query)OR trigger_error($conn->error, E_USER_ERROR);
                    }
                }
                ?>

                <?php
                include "formCadastraIntegrantes.php";
                ?>
            </div>
        </div>
    </div>

    <div class="footer_integrante">
		<?php
			include_once 'footer.php';
		?>
	</div>
</body>
</html>