<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equivoco</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="container">
                <div class="form">
                    <h2>Login à EQUITCHÊ</h2>
                <form method="POST" name="loginform" action="userauthentication.php">
                    <div class="inputBox">
                        <input type="text" name="email" id="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Entrar" id="entrar" name="entrar" class="btn">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>  
</body>
</html>