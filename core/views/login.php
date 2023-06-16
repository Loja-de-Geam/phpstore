<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/login.css">
    <title>Login</title>
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
            width: 650%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            background-image: linear-gradient(to bottom, #80ffd4a9,#80ffd4a9,#80ffd4a9, #339473a9) ;
            border-radius: 0px 7px 7px 0px;
        }
        .form-img  img {
            width: 31rem;
        }
        .form {
            width: 35%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fff;
            padding: 3rem;
            border-radius: 7px 0px 0px 7px;
        }
        /* TITULO + CADASTRO */
        .cabeca {
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
        }
        .cadastro {
            display: flex;
            align-items: center;
            
        }
        .cadastro button {
            border: none;
            background-color: #423acf;
            padding: 0.6rem 1rem;
            border-radius: 20px;
            cursor: pointer;
        }
        .cadastro button:hover {
            background-color: #6c63fff1;
        }
        .cadastro button a {
            text-decoration: none;
            font-weight: bolder;
            color: #fff;
            font-size: 1rem;
        }
        /* TITULO */
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
            padding-top: 1rem;
        }
        .caixa {
            display: flex;
            flex-direction: row;
            margin-bottom: 1.5rem;
        }

        .caixa input {
            display: block;
            margin: 1rem 0 2rem 0;
            padding: 0.8rem 1.2rem ;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000003f;
            font-size: 1.1rem;
        }
        /*-------------------------------*/
        .caixa input:hover {
            background-color: #eeeeee75;
        }

        .caixa input:focus-visible {
            outline: 1px solid #6c63ff;
        }

        .caixa label {
            font-size: 1.4rem;
            font-weight: bolder;
            color: #000000;
        }

        .caixa input::placeholder {
            color: #000000be;
        }

        .entrar button {
            width: 100%;
            margin-top: 2.5rem;
            border: none;
            background-color: #423acf;
            padding: 0.62rem;
            border-radius: 20px;
            cursor: pointer;
        }
        #mostrar-senha {
            border: none;
        }

        .entrar button:hover {
            background-color: #6b63fff1;
        }

        .entrar button a {
            text-decoration: none;
            font-size: 0.93rem;
            font-weight: bolder;
            color: #fff;
        }

    </style>
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
                    <button><a href="cadastro.html">Cadastrar-se</a></button>
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