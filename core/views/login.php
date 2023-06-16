<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/login.css">
    <title>Login</title>
    <link rel="stylesheet" href="..\public\assets\css\login.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="#" method="post">
                <div class="cabeca">
                    <div class="titulo">
                        <h1>Login</h1>
                    </div>
                <div class="cadastro">
                    <button onclick="window.location.href='cadastro.html'">Cadastrar-se</button>
                </div>
                </div>
                <div class="grupo_input">
                    
                    <div class="caixa">
                        <label for="email">E-mail
                        <input type="email" name="email" id="idemail" placeholder="Digite seu e-mail" required> </label> 
                    </div>
                    
                    <div class="caixa">
                        <label for="senha">Senha
                        <input type="password" name="senha" id="idsenha" placeholder="Digite sua senha" required> </label> 
                    </div>
                </div>
                <div class="entrar">
                    <button><a href="@">Entrar</a></button>
                </div>
            </form>
        </div>
        <div class="form-img">
            <img src="..\public\assets\images\login.svg" alt="">
        </div>
    </div>
</body>
</html>