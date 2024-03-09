<?php    
include "config.php";

@$identificador = $_GET['id'];

$consulta_imagens = "SELECT * FROM imagens WHERE `id_imagens` = '$identificador'";

$resultado = mysqli_query($conn, $consulta_imagens);
while($linha = mysqli_fetch_array($resultado)){
    
    $id_imagens = $linha['id_imagens'];
    $arquivo = $linha['arquivo'];

}
?>

<body>
    <div id="form_mostra_fotos">
        <form action="" method="POST" enctype="multipart/form-data" name="cadastro_imagens" id="cadastro_imagens">

            <table>
                <?php
                echo
                "<tr><td><img src='./images/upload/$arquivo'></a></td>".
                "</tr>";
                ?>
            </table>
        </form>
    </div>

</body>
