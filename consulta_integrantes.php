<?php
include("config.php");
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>.:: EQUIVOCO - Consulta de Integrantes ::.</title>

    <link rel="stylesheet" href="./css/consultar.css"/>

    
    <script type="text/javascript">
        Redirect();
        function Redirect() {
            setTimeout("location.reload(true);",30000);
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
        	<div id="consultas">
                <p><strong>CONSULTA INTEGRANTES</strong></p>
                <table>
                   <tr>
                    <td><label>Nome</label></td>
                    <td><label>E-mail</label></td>
                    <td><label>Telefone</label></td>
                    <td><label>Status</label></td>
                    <td><label>Editar</label></td>
                </tr>
                <?php
                $quantidade_pg = 12;
                $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                $inicio = ($quantidade_pg * $pagina) - $quantidade_pg;


                $consulta_integrantes = "SELECT * FROM integrantes ORDER BY apelido ASC LIMIT $inicio, $quantidade_pg";
                $resultado = mysqli_query($conn, $consulta_integrantes) or die(mysqli_error());
                while($row = mysqli_fetch_array($resultado)){
                    
                    $id = $row['id_integrantes'];
                    $apelido = $row['apelido'];
                    $email = $row['email'];
                    $telefone = $row['telefone'];
                    $situacao = $row['situacao'];
                    if($situacao == 1){
                        $situacao = "Ativo";
                    }else{
                        $situacao = "Inativo";
                    }

                    echo("
                        <tr>
                        <td>" . $apelido . "</td>
                        <td>" . $email . "</td>
                        <td>" . $telefone . "</td>
                        <td>" . $situacao . "</td>
                        <td><a href='editando_integrantes.php?id=" . $id . "'><img src='./images/icone_editar.png' ></td>
                        </tr>
                        ");

                    $seleciona_integrantes = "SELECT * FROM integrantes";   
                    $result_selecao = mysqli_query($conn,$seleciona_integrantes) or die(mysqli_error());
                    $total_integrantes = mysqli_num_rows($result_selecao);

                    $num_pagina = ceil($total_integrantes / $quantidade_pg);
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