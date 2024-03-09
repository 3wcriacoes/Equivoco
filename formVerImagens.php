<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>.:: EQUIVOCO - Consulta de Imagens ::.</title>

    <link rel="stylesheet" href="./css/consultas.css"/>
</head>

<div id="imagens">
    <form action="listar_imagens.php" method="POST" enctype="multipart/form-data" name="mostrar_imagens" id="mostrar_imagens">
        <p><strong>CONSULTA IMAGENS NO BANCO DE DADOS</strong></p>
        <table>
            
            <tr>
                <td><label>Pesquisar:</label></td>
            </tr>
            <tr>
                <td><input type="text" name="pesquisar" id="pesquisar" required autofocus="pesquisar" />
                    <input type="submit" name="salvar" id="salvar" value="buscar" class="btn" /></td>
                </tr>
            </table>
        </form>
    </div>

    </html>