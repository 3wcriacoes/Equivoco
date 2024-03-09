<body>
    <?php    
    include "config.php";
    
    $identificador = $_GET['id']; // dependendo de como está trabalhando pode twer que mudar para $_POST['id']

    //Criar a query
    $sql = "SELECT i.id_imagens, i.descricao, i.localizacao, i.observacao, b.nome AS bairro, r.nome AS rotulo, i.arquivo, i.situacao FROM imagens AS i 
        INNER JOIN bairros AS b ON b.id_bairros = i.id_bairros 
        INNER JOIN rotulos AS r ON r.id_rotulos = i.id_rotulos 
        WHERE `id_imagens` = '$identificador';";
    
    // Executa a query
    $result = mysqli_query($conn, $sql);
    
    ?>

    <?php

    while ($row = mysqli_fetch_array($result)) 
    {
        ?>  


        <div id="form_mostra_dados">
            <form action="" method="POST" enctype="multipart/form-data" name="cadastro_imagens" id="cadastro_imagens">

                <table>
                    <tr>
                        <td id="content_editar"><input type="hidden" name="id_imagens" id="id_imagens" value="<?php echo "$id_imagens" ?> "/></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><label>Descrição da Imagem:</label></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><input type="text" name="descricao" id="descricao" value="<?php echo ($row['descricao']) ?>" disabled/></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><label>Localização:</label></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><input type="text" name="localizacao" id="localizacao" value="<?php echo ($row['localizacao']) ?>" disabled/></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><label>Ponto de Referência:</label></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><input type="text" name="observacao" id="observacao" value="<?php echo ($row['observacao']) ?>" disabled/></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><label>Bairro:</label></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><input type="text" name="id_bairros" id="id_bairros" value="<?php echo ($row['bairro']) ?>" disabled/></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><label>Rótulo:</label></td>
                    </tr>
                    <tr>
                        <td id="content_editar"><input type="text" name="id_rotulos" id="id_rotulos" value="<?php echo ($row['rotulo']) ?>" disabled/></td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
    }
    
    ?>

</body>
