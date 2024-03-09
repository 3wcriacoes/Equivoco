<?php 
include "restricao_login.php";
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Imagens</title>

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
            include_once "menu.php"
            ?>
		</div>
            <div id="content_btn">
                <div class="cadastro">

                <?php
                if (isset($_POST['acao']) && ($_POST['acao'] == 'SALVAR'))
                $descricao = $_POST['descricao'];
                @$localizacao = $_POST['localizacao'];
                @$observacao = $_POST['observacao'];
                @$id_bairros = $_POST['id_bairros'];
                @$id_rotulos = $_POST['id_rotulos'];
                @$situacao = $_POST['1'];
                @$arquivo = $_FILES['arquivo'];
                @$nome = $arquivo['name'];
                @$tmp = $arquivo['tmp_name'];

                $extensao = explode('.', $nome);
                $ext = end($extensao);

                $novoNome = 'Equivoco-' . md5($nome).'.'.$ext;

            //NOME DA IMAGEM
                $arquivoName = $novoNome;

                if(empty($arquivo)):
                //echo 'Selecione um arquivo para upload';
                else:
                    if(move_uploaded_file($tmp, 'images/upload/'.$novoNome)):

                        @$query = "INSERT INTO imagens (descricao, localizacao, observacao, id_bairros, id_rotulos, arquivo, situacao) VALUES ('$descricao','$localizacao','$observacao','$id_bairros','$id_rotulos','$arquivoName','1')";

                        $result = $conn->query($query)OR trigger_error($conn->error, E_USER_ERROR);
                        //echo 'Arquivo enviado com sucesso';

                    else:
                        //echo 'Erro ao enviar arquivo';
                    endif;
                endif;
                ?>

                <?php
                include_once 'formCadastraImagens.php';
                ?>

            </div>

        </div>
    </div>

    <div class="footer">
		<?php
			include_once 'footer.php';
		?>
	</div>

</body>
</html>