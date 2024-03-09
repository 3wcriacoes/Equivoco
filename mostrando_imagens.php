<?php    
include "config.php";
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta content="text/html"; charset="iso-8859-1" />
    <title>.:: EQUIVOCO ::.</title>

    <link rel="stylesheet" href="./css/consultar.css"/>

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

            <div id="imagem1">
                <?php
                include_once "imagens_foto.php"
                ?>
            </div>
            <div id="imagem2">
                <?php
                include_once "imagens_dados.php"
                ?>
            </div>

        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>
</html>