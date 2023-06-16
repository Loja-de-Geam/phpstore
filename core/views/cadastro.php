<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/cadastro.css">
    <title>Cadastro</title>
    <link rel="stylesheet" href="..\public\assets\css\cadastro.css">
    <link rel="shortcut icon" href="assets\images\logo\favicon.ico" type="image/x-icon">
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
                    <button class="btn"><a href="?a=login">Entrar</a></button>
                </div>
                </div>
                <div class="grupo_input">
                    <div class="caixa">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="idnome" placeholder="Digite seu  nome" required>
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
                        <input type="password" name="senha" id="idsenha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="caixa">
                        <label for="csenha">Confirme sua senha</label>
                        <input type="password" name="csenha" id="id1csenha" placeholder="Digite sua senha outra vez" required>
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
                            <label for="none">Prefiro não informar</label>
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
    <script src="..\public\assets\css\cadastro.js"></script>
    <script>
        $('#idcelular').mask('(00) 00000-0000');
        $('#idcpf').mask('000.000.000-00', {reverse: true});
        function mostrarSenha() {
            var senhaInput = document.getElementById("idsenha");
            var iconeSenha = document.getElementById("idmostrar-senha");
            if (senhaInput.type === "password") {
                senhaInput.type = "text";
                iconeSenha.style.color = "rgb(107, 136, 224)"; // define a cor do ícone para verde
            } else {
                senhaInput.type = "password";
                iconeSenha.style.color = "#423acf"; // define a cor do ícone para vermelho
            }
        }
    </script>
</body>
</html>