<?php 
    if(isset($_SESSION['logado'])) {
        header('Location: ./');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="public_html\assets\css\style_login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="" method="post">
                <div class="cabeca">
                    <div class="titulo">
                        <h1>Login</h1>
                    </div>
                    <div class="cadastro">
                        <button onclick="window.location.href='./?a=cadastro'">Cadastrar-se</button>
                    </div>
                </div>
                <div class="grupo_input">

                    <div class="caixa">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="idemail" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="caixa">
                        <label for="senha">Senha</label>
                        <div class="input-wrapper">
                            <div class="input-senha">
                                <input type="password" name="senha" id="idsenha" placeholder="Digite sua senha" required minlength="8">
                                <div class="olho">
                                    <button type="button" id="idmostrar-senha" onclick="mostrarSenha()">
                                        <i class="bi bi-eye-fill eye"></i>
                                    </button>
                                </div>
                            </div>
                            <p><a  class="suporte" href="">Esqueceu a senha?</a></p>
                        </div>
                    </div>
                </div>
                <div class="entrar">
                    <button name="acao">Entrar</button>
                    <p class="suporte"><a onclick="window.location.href='./?a=suporte'">Suporte</a></p>
                </div>
            </form>
        </div>
        <div class="form-img">
            <img src="public_html\assets\images\login.svg" alt="login">
        </div>
    </div>
    <script>
        function mostrarSenha() {
            var senhaInput = document.getElementById("idsenha");
            var mostrarSenhaBtn = document.getElementById("idmostrar-senha");

            if (senhaInput.type === "password") {
                senhaInput.type = "text";
                mostrarSenhaBtn.innerHTML = '<i class="bi bi-eye-slash-fill eye"></i>';
            } else {
                senhaInput.type = "password";
                mostrarSenhaBtn.innerHTML = '<i class="bi bi-eye-fill eye"></i>';
            }
        }
    </script>
</body>

</html>