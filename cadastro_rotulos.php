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
                    include "classeRotulos.php";
                    include "config.php";

                    if (mysqli_connect_error()) {
                        echo "Falha ao conectar no Banco de Dados";
                    } else {

                        if (isset($_POST['salvar'])) {
                            if ($_POST['id_rotulos'] == "") {
                                $nome = $_POST['nome'];
                                $observacao = $_POST['observacao'];
                                $situacao = $_POST['1'];

                        //salva o registro na base de dados
                        //Forma a instrução
                                $query = "INSERT INTO rotulos (nome, observacao, situacao) VALUES ('$nome','$observacao','1')";
                                
                                header("Location: cadastro_rotulos.php");
                            }
                            $result = $conn->query($query)OR trigger_error($conn->error, E_USER_ERROR);
                        }
                    }
                    ?>

                    <?php
                    include "formCadastraRotulos.php";
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="footer">
        <?php
            include_once 'footer.php';
        ?>
    </div>
</body>
</html>