<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <title>Cadastro</title>
    <link rel="stylesheet" href="..\public\assets\css\cadastro.css">
    <link rel="shortcut icon" href="assets\images\logo\favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<div class="container">
        <div class="form-img">
            <img src="..\public\assets\images\cadastro.svg" alt="">
        </div>
        <div class="form">
            <form action="#" method="post">
                <div class="cabeca">
                    <div class="titulo">
                        <h1>Cadastre-se</h1>
                    </div>
                <div class="login">
                    <button onclick="window.location.href='/phpstore/public/?a=login'">Entrar</button>
                </div>
                </div>
                <div class="grupo_input">
                    <div class="caixa">
                        <label for="nome">Primeiro nome</label>
                        <input type="text" name="nome" id="idnome" placeholder="Digite seu primeiro nome" required>
                    </div>
                    <div class="caixa">
                        <label for="celular">Celular</label>
                        <input type="tel" name="celular" id="idcelular" placeholder="(xx) xxxxx-xxxx" required>
                    </div>
                    <div class="caixa">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="idemail" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="caixa">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="idcpf" placeholder="Digite seu CPF" required>
                    </div>
                    <div class="caixa">
                        <label for="senha">Senha</label>
                        <div class="input-wrapper">
                            <input type="password" name="senha" id="idsenha" placeholder="Digite sua senha" required minlength="8">
                            <button type="button" id="idmostrar-senha" onclick="mostrarSenha()">
                                <span class="material-symbols-outlined">
                                    visibility
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="caixa">
                        <label for="csenha">Confirme sua senha</label>
                        <input type="password" name="csenha" id="id1csenha" placeholder="Digite sua senha outra vez" required minlength="8">
                    </div>
                </div>
                <div class="genero">
                    <div class="genero-titulo">
                        <h5>Gênero</h5>
                    </div>
                    <div class="genero-grupo">
                        <div class="genero-input">
                            <input type="radio" name="genero" id="idmasculino">
                            <label for="masculino">Masculino</label>
                        </div>
                        <div class="genero-input">
                            <input type="radio" name="genero" id="idfeminino">
                            <label for="feminino">Feminino</label>
                        </div>
                        <div class="genero-input">
                            <input type="radio" name="genero" id="idoutros">
                            <label for="outros">Outros</label>
                        </div>
                        <div class="genero-input">
                            <input type="radio" name="genero" id="idnone">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                <div class="continuar">
                    <button><a href="@">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $('#idcelular').mask('(00) 00000-0000');
        $('#idcpf').mask('000.000.000-00', {reverse: true});
        function mostrarSenha() {
            var senhaInput = document.getElementById("idsenha");
            var mostrarSenhaBtn = document.getElementById("idmostrar-senha");
    
            if (senhaInput.type === "password") {
                senhaInput.type = "text";
                mostrarSenhaBtn.innerHTML = '<span class="material-symbols-outlined">visibility_off</span>';
            } else {
                senhaInput.type = "password";
                mostrarSenhaBtn.innerHTML = '<span class="material-symbols-outlined">visibility</span>';
            }
        }
    </script>
</body>
</html>