<div class="container">
    <div class="formulario">
        <form action="cadastro_usuarios.php" method="POST" enctype="multipart/form-data" name="cadastro_bairros" id="cadastro_bairros">
            <h4>CADASTRO DE USUÁRIOS</h4>
                <table>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" placeholder="Digite o nome do usuário">
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" placeholder="Digite o e-mail do usuário">
                    </div>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" placeholder="Digite a senha do usuário">
                    </div>
                    
                </table>
                <table>          
                    <div class="btn">
                        <input type="submit" value="INSERIR" id="entrar" name="salvar">
                    </div>
                </table>
        </form>
    </div>
</div>