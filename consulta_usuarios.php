<?php
include("config.php");
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>.:: EQUIVOCO - Consulta de Rótulos ::.</title>

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
                <p><strong>CONSULTA USUÁRIOS</strong></p>
                <table>
                   <tr>
                    <td><label>Nome</label></td>
                    <td><label>Email</label></td>
                    <td><label>Status</label></td>
                    <td><label>Editar</label></td>
                </tr>
                <?php

                $quantidade_pg = 12;
                $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                $inicio = ($quantidade_pg * $pagina) - $quantidade_pg;

                $consulta_usuarios = "SELECT * FROM usuarios ORDER BY nome ASC LIMIT $inicio, $quantidade_pg";
                $resultado = mysqli_query($conn, $consulta_usuarios) or die(mysqli_error());
                while($row = mysqli_fetch_assoc($resultado)){

                    $id = $row['id_usuarios'];
                    $nome = $row['nome'];
                    $email = $row['email'];
                    $situacao = $row['situacao'];
                    if($situacao == 1){
                        $situacao = "Ativo";
                    }else{
                        $situacao = "Inativo";
                    }
                }

                echo("
                    <tr>
                    <td>" . $nome . "</td>
                    <td>" . $email . "</td>
                    <td>" . $situacao . "</td>
                    <td id='img'><a href='editando_usuarios.php?id=" . $id . "'><img src='./images/icone_editar.png' ></td>
                    </tr>
                    ");

                $seleciona_usuarios = "SELECT * FROM usuarios";
                $result_selecao = mysqli_query($conn,$seleciona_usuarios) or die(mysqli_error());
                $total_usuarios = mysqli_num_rows($result_selecao);

                $num_pagina = ceil($total_usuarios / $quantidade_pg);
                
                
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