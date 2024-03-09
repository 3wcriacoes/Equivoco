<?php    
include "config.php";

$identificador = $_GET['id'];

$consulta_imagens = "SELECT * FROM imagens a
WHERE `id_imagens` = '$identificador'";

$resultado = mysqli_query($conn, $consulta_imagens);
while($linha = mysqli_fetch_array($resultado)){
    
    $id_imagens = $linha['id_imagens'];
    $descricao = $linha['descricao'];
    $localizacao = $linha['localizacao'];
    $observacao = $linha['observacao'];
    $id_bairros = $linha['id_bairros'];
    $id_rotulos = $linha['id_rotulos'];
    $situacao = $linha['situacao'];

}
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta content="text/html; charset="iso-8859-1" />
    <title>Edição de Imagens</title>

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



        <div id="editar_btn_imagens">
            <div id="editar1">
                <form action="processa_edita_imagens.php" method="POST" enctype="multipart/form-data" name="editando_imagens" id="editando_imagens">
                    <p><strong>EDITAR CAMPOS DA IMAGEM</strong></p>
                    <table>
                        <tr>
                            <td id="content_editar"><input type="hidden" name="id_imagens" id="id_imagens" value="<?php echo "$id_imagens" ?> "/></td>
                        </tr>
                        <tr>
                            <td id="content_editar"><label>Descrição da Imagem:</label></td>
                        </tr>
                        <tr>
                            <td id="content_editar"><input type="text" name="descricao" id="descricao" value="<?php echo "$descricao" ?> "/></td>
                        </tr>
                        <tr>
                            <td id="content_editar"><label>Localização:</label></td>
                        </tr>
                        <tr>
                            <td id="content_editar"><input type="text" name="localizacao" id="localizacao" value="<?php echo "$localizacao" ?>"/></td>
                        </tr>
                        <tr>
                            <td id="content_editar"><label>Ponto de Referência:</label></td>
                        </tr>
                        <tr>
                            <td id="content_editar"><input type="text" name="observacao" id="observacao" value="<?php echo "$observacao" ?> "/></td>
                        </tr>
                        <tr>
                            <td id="content_editar"><label>Bairros:</label></td>
                        </tr>
                        <tr>
                            <td id="content_editar">
                                <select name="id_bairros" id="id_bairros">

                                    <?php
                                    $identificador = $_GET['id'];

                                        $busca_bairros = "SELECT * FROM bairros ORDER BY nome";
                                        $result_bairros = mysqli_query($conn, $busca_bairros);
                                        while($row_bairros = mysqli_fetch_assoc($result_bairros)){
                                            $selected = ($id_bairros == $row_bairros['id_bairros'])?' selected':'';
                                            echo '<option'.$selected.' value="'.$row_bairros['id_bairros'].'">'.$row_bairros['nome'].'</option>';
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td id="content_editar"><label>Rótulos:</label></td>
                        </tr>
                        <tr>
                            <td id="content_editar">
                                <select name="id_rotulos" id="id_rotulos">
                                    <?php
                                    $identificador = $_GET['id'];
                                    
                                    $sql = "SELECT i.id_imagens, i.descricao, i.localizacao, i.observacao, b.nome AS rotulos, FROM imagens AS i 
                                    INNER JOIN rotulos AS b ON b.id_bairros = i.id_bairros 
                                    WHERE id_imagens = 'id'";
                                    
                                    $result_rotulos = mysqli_query($conn, $sql); 
                                        while($row_rotulos = mysqli_fetch_assoc($result_rotulos)){ 
                                            echo '<option value="'.$row_rotulos['id_rotulos'].' selected = "selected">'.$row_rotulos['nome'].'</option>';
                                    }
                                    ?>

                                    <?php
                                        $busca_rotulos = "SELECT * FROM rotulos ORDER BY nome";
                                        $result_rotulos = mysqli_query($conn, $busca_rotulos);
                                        while($row_rotulos = mysqli_fetch_assoc($result_rotulos)){
                                            $selected = ($id_rotulos == $row_rotulos['id_rotulos'])?' selected':'';
                                            echo '<option'.$selected.' value="'.$row_rotulos['id_rotulos'].'">'.$row_rotulos['nome'].'</option>';
                                        }
                                    ?>
            </select>
        </td>
    </tr>
    <tr>
        <td id="checkbox"><label>Situação:</label></td>
    </tr>
    <tr>
        <td id="checkbox"><label>Ativo</label><input type="checkbox" name="situacao" value="1" checked="TRUE"></td>
    </tr>
</table>

<tr>
    <td id="editar_btn_imagens"><input type="submit" name="salvar" id="salvar" value="Salvar" class="btn" /></td>
</tr>
</form>
</div>
</div>
</div>
<?php
include_once 'footer.php';
?>
</body>
</html>