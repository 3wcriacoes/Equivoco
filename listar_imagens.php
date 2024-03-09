<?php 
include "restricao_login.php";
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>.:: EQUIVOCO - Consulta de Imagens ::.</title>

    <link rel="stylesheet" href="./css/consultar.css"/>

    <script type="text/javascript">
        Redirect();
        function Redirect() {
            setTimeout("location.reload(true);",60000);
        }
    </script>
</head>

<body>
    <div id="main">

        <?php
        include_once "topo.php"
        ?>
        <?php
        include_once "nav_on.php"
        ?>

        
        <div id="parte1">
            <div id="imagens">
                <?php
                include "formVerImagens.php";
                ?>
            </div>
            <?php
            include "classeImagens.php";
            include "config.php";

            @$id_imagens = $_POST['id_imagens'];
            @$pesquisar = $_POST['pesquisar'];

            if(isset($pesquisar)){
                $consulta = "SELECT * FROM imagens WHERE descricao LIKE '%$pesquisar%'";

                $resultado = $conn->query($consulta) or die ($conn->error);

            }
            ?>
            <div id="consultas_imagens"> 
                <table>
                    <tr>
                        <td>Imagem</td>
                        <td>Endereço</td>
                    </tr>
                </table>
                <table>
                    
                    <?php while($rows_imagens = @mysqli_fetch_array(@$resultado)){ 
                        $id_imagens = $rows_imagens["id_imagens"];
                        $arquivo = $rows_imagens["arquivo"];
                        $localizacao = $rows_imagens["localizacao"];

                        echo
                        "<tr><td><a href='mostrando_imagens.php?id=$id_imagens'><img src='images/upload/$arquivo'></a></td>".
                        "<td>$localizacao</td>".
                        "</tr>";

                    } ?>
                </table>
                
            </div>
            
        </div>

    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>
</html>