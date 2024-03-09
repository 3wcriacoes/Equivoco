<div class="container">
    <div class="formulario">
        <form action="cadastro_imagens.php" method="POST" enctype="multipart/form-data" name="cadastro_bairros" id="cadastro_bairros">
            <h4>CADASTRO DE TAGS</h4>
                <table>
                <tr>
                    <div class="inputBox">
                        <input type="text" name="descricao" id="descricao" placeholder="Digite o nome da imagem">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="localizacao" id="localizacao" placeholder="Digite a localizacao do local">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="observacao" id="observacao" placeholder="Digite alguma observação sobre o local">
                    </div>
                <tr>
                    <td id="content"><label>Bairros:</label></td>
                </tr>
                <tr>
                    <td id="content_select">
                        <select name="id_bairros" id="id_bairros">
                            <option id="select">Selecione o Bairro:</option>
                            <?php
                            $busca_bairros = "SELECT * FROM bairros WHERE situacao = 1 ORDER BY nome";
                            $result_bairros = mysqli_query($conn, $busca_bairros);
                            while($row_bairros = mysqli_fetch_assoc($result_bairros)){
                                echo '<option value="'.$row_bairros['id_bairros'].'">'.($row_bairros['nome']).'</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td id="content"><label>Rótulos:</label></td>
                </tr>
                <tr>
                    <td id="content_select">
                        <select name="id_rotulos" id="id_rotulos">
                            <option>Selecione o Rótulo:</option>
                            <?php
                            $busca_rotulos = "SELECT * FROM rotulos WHERE situacao = 1 ORDER BY nome";
                            $result_rotulos = mysqli_query($conn, $busca_rotulos);
                            while($row_rotulos = mysqli_fetch_assoc($result_rotulos)){
                                echo '<option value="'.$row_rotulos['id_rotulos'].'">'.($row_rotulos['nome']).'</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td id="content"><label>Escolha a Imagem:</label></td>
                </tr>
                <tr>
                    <td id="content"><input type="file" name="arquivo" id="arquivo" /></td>
                </tr>

                </table>
                <table>          
                    <div class="btn">
                        <input type="submit" value="INSERIR" id="entrar" name="salvar">
                    </div>
                </table>
        </form>
    </div>
</div>