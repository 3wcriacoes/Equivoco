<?php
include "config.php";
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>.:: EQUIVOCO - Consulta de Bairros ::.</title>

    <link rel="stylesheet" href="./css/consultar.css"/>

</head>

<body>

    <div id="main">

        <?php
        include_once "topo.php";
        ?>
        <?php
        include_once "nav_on.php";
        ?>

        
        <div id="parte1">  
        	<div id="consultas">
                <p><strong>CONSULTA BAIRROS</strong></p>
                <table>
                   <tr>
                    <td><label>Nome</label></td>
                    <td><label>Observação</label></td>
                    <td><label>Status</label></td>
                    <td><label>Editar</label></td>
                </tr>
                <?php
                $quantidade_pg = 12;
                $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                $inicio = ($quantidade_pg * $pagina) - $quantidade_pg;


                $consulta_bairros = "SELECT * FROM bairros ORDER BY nome ASC LIMIT $inicio, $quantidade_pg";
                $resultado = mysqli_query($conn, $consulta_bairros) or die(mysqli_error());
                while($row = mysqli_fetch_array($resultado)){
                    
                    $id = $row['id_bairros'];
                    $nome = $row['nome'];
                    $observacao = $row['observacao'];
                    $situacao = $row['situacao'];
                    if($situacao == 1){
                        $situacao = "Ativo";
                    }else{
                        $situacao = "Inativo";
                    }

                    echo("
                        <tr>
                        <td>" . $nome . "</td>
                        <td>" . $observacao . "</td>
                        <td>" . $situacao . "</td>
                        <td><a href='editando_bairros.php?id=" . $id . "'><img src='./images/icone_editar.png' ></td>
                        </tr>
                        ");

                    $seleciona_bairros = "SELECT * FROM bairros";   
                    $result_selecao = mysqli_query($conn,$seleciona_bairros) or die(mysqli_error());
                    $total_bairros = mysqli_num_rows($result_selecao);

                    $num_pagina = ceil($total_bairros / $quantidade_pg);
                }
                ?>

            </table>
            <table id="paginacao">
               <tr>
                <td>
                    <?php
                    echo '<a href="?pagina=1"><img src="./images/seta_esquerda.png"></a> ';

                    for($i = 1; $i <= $num_pagina; $i++){
                        if($i == $pagina)
                            echo $i;
                        else
                            echo " <a href=\"?pagina=$i\">$i</a> ";
                    }

                    echo " <a href=\"?pagina=$num_pagina\"><img src='./images/seta_direita.png'></a> ";
                    ?>       
                </td>
            </tr>


        </table>
    </div>
</div> 
</div>

<?php
include "footer.php"
?>

</body>
</html>