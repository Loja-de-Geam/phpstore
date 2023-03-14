<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/cadastro.css">
    <title>Cadastro</title>
    <style>
        @charset "UTF-8";

        @import url('https://fonts.googleapis.com/css2? family= Inter:wght@100;200;300;400;500;600;700;800;900 & display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center ;
            background-image: linear-gradient(to bottom, rgb(0, 0, 206),rgb(0, 0, 65));
        }
        .container {
            width: 80%;
            height: 80vh;
            display: flex;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.308) ;
        }
        .form-img {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            background-color: rgba(127, 255, 212, 0.664);
            padding: 1rem;
            border-radius: 7px 0px 0px 7px;
        }
        .form-img  img {
            width: 31rem;
        }
        .form {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fff;
            padding: 3rem;
            border-radius: 0px 7px 7px 0px;
        }
        .cabeca {
            margin-bottom: 3em;
            display: flex;
            justify-content: space-between;
        }
        .login {
            display: flex;
            align-items: center;
            
        }
        .login button {
            border: none;
            background-color: #423acf;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            cursor: pointer;
        }
        .login button:hover {
            background-color: #6c63fff1;
        }
        .login button a {
            text-decoration: none;
            font-weight: bold;
            color: #fff;
        }
        .cabeca h1 {
            color: #09072e;
        }
        .cabeca h1::after {
            content: '';
            display: block;
            width: 5rem;
            height: 0.3rem;
            background-color: #4f48cc;
            margin: 0 auto;
            position: absolute;
            border-radius: 10px;
        }
        .grupo_input {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0.5rem 0;
        }
        .caixa {
            display: flex;
            flex-direction: column;
            margin-bottom: 1.1rem;
        }

        .caixa input {
            margin: 0.6rem 0;
            padding: 0.8rem 1.2rem;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000001c;
            font-size: 0.8rem;
        }
        /*-------------------------------*/
        .caixa input:hover {
            background-color: #eeeeee75;
        }

        .caixa input:focus-visible {
            outline: 1px solid #6c63ff;
        }

        .caixa label,
        .genero-titulo h5 {
            font-size: 0.9rem;
            font-weight: bolder;
            color: #000000;
        }

        .caixa input::placeholder {
            color: #000000be;
        }

        .genero-grupo {
            display: flex;
            justify-content: space-between;
            margin-top: 0.62rem;
            padding: 0 .5rem;
        }

        .genero-input {
            display: flex;
            align-items: center;
        }

        .genero-input input {
            margin-right: 0.35rem;
        }

        .genero-input label {
            font-size: 0.81rem;
            font-weight: 600;
            color: #000000e5;
        }

        .continuar button {
            width: 100%;
            margin-top: 2.5rem;
            border: none;
            background-color: #423acf;
            padding: 0.62rem;
            border-radius: 20px;
            cursor: pointer;
        }

        .continuar button:hover {
            background-color: #6b63fff1;
        }

        .continuar button a {
            text-decoration: none;
            font-size: 0.93rem;
            font-weight: bolder;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-img">
            <img src="../public/assets/imagens" alt="">
        </div>
        <div class="form">
            <form action="#" method="post">
                <div class="cabeca">
                    <div class="titulo">
                        <h1>Cadastre-se</h1>
                    </div>
                <div class="login">
                    <button><a href="login.html">Entrar</a></button>
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
</body>
</html>