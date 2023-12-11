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
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <title>Cadastro</title>
    <link rel="stylesheet" href="public_html\assets\css\style_cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <div class="container">
        <div class="form-img">
            <img src="public_html\assets\images\cadastro.svg" alt="">
        </div>
        <div class="form">
            <form action="" method="post">
                <div class="cabeca">
                    <div class="titulo">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login">
                        <button onclick="window.location.href='./?a=login'">Entrar</button>
                    </div>
                </div>
                <div class="grupo_input">
                    <div class="caixa">
                        <label for="idnome">Nome</label>
                        <input type="text" name="nome" id="idnome" placeholder="Digite seu primeiro nome" required maxlength="200">
                    </div>
                    <div class="caixa">
                        <label for="idcelular">Celular</label>
                        <input type="tel" name="celular" id="idcelular" placeholder="(xx) xxxxx-xxxx" required>
                    </div>
                    <div class="caixa">
                        <label for="idemail">E-mail</label>
                        <input type="email" name="email" id="idemail" placeholder="Digite seu e-mail" required maxlength="50">
                    </div>
                    <div class="caixa">
                        <label for="idcpf">CPF</label>
                        <input type="text" name="cpf" id="idcpf" placeholder="Digite seu CPF" required>
                    </div>
                    <div class="caixa">
                        <label for="idsenha">Senha</label>
                        <div class="input-wrapper">
                            <input type="password" name="senha" id="idsenha" placeholder="Digite sua senha" required minlength="8" maxlength="60">
                            <button type="button" id="idmostrar-senha" onclick="mostrarSenha()">
                                <i class="bi bi-eye-fill eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="caixa">
                        <label for="csenha">Confirme sua senha</label>
                        <input type="password" name="csenha" id="id1csenha" placeholder="Digite sua senha outra vez" required minlength="8">
                        <div id="erro_senha" style="color: red; font-size: 10px;"></div>
                    </div>
                </div>
                <div class="genero">
                    <div class="genero-titulo">
                        <h5>Gênero</h5>
                    </div>
                    <div class="genero-grupo">
                        <div class="genero-input">
                            <input type="radio" name="genero" id="idmasculino" value="mas">
                            <label for="idmasculino">Masculino</label>
                        </div>
                        <div class="genero-input">
                            <input type="radio" name="genero" id="idfeminino" value="fem">
                            <label for="idfeminino">Feminino</label>
                        </div>
                        <div class="genero-input">
                            <input type="radio" name="genero" id="idoutros" value="out">
                            <label for="idoutros">Outros</label>
                        </div>
                        <div class="genero-input">
                            <input type="radio" name="genero" id="idnone" checked>
                            <label for="idnone">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                <div class="continuar">
                    <button name="cadastrar">Continuar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $('#idcelular').mask('(00) 00000-0000');
        $('#idcpf').mask('000.000.000-00', {
            reverse: true
        });

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


        function validarSenha() {
            var senha = document.getElementById('idsenha').value;
            var confirmarSenha = document.getElementById('id1csenha').value;
            var mensagemErro = document.getElementById('erro_senha');
            var inputSenha = document.getElementById('idsenha');
            var inputConfirmarSenha = document.getElementById('id1csenha');

            if (senha !== confirmarSenha) {
                mensagemErro.innerHTML = 'As senhas não correspondem.';
                inputSenha.style.border = '1px solid red';
                inputConfirmarSenha.style.border = '1px solid red';
                return false; 
            } else {
                mensagemErro.innerHTML = ''; 
                inputSenha.style.border = ''; 
                inputConfirmarSenha.style.border = ''; 
                return true;
            }
        }

    
        document.querySelector('form').addEventListener('submit', function (event) {
            if (!validarSenha()) {
                event.preventDefault(); 
            }
        });
    </script>
</body>

</html>