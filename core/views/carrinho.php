<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="public_html/assets/css/style_inicio.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" />
<link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
<title>TESTE</title>
    <style>
        .carrinho-pesq {
            position: relative;
            display: flex;
            margin: 10px;
            width: 900px;
            height: 200px;
            margin-bottom: 20px;
            border-radius: 7px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.644);
            background-color: #fff;
        }


        .imagem {
            flex: 1;
            height: 100%;
            border-radius: 7px 0 0 7px;
        }

        .imagem img {
            max-height: 100%;
            width: 100%;
            display: block;
            border-radius: 7px 0 0 7px;
        }

        .conteudo {
            flex: 2;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .favoritar-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            border: none;
            background-color: transparent;
            padding: 0;
            cursor: pointer;
        }


        .favoritar-btn .material-symbols-outlined {
            font-size: 40px;
            color: #423acf;
        }

        .favoritar-btn .material-symbols-outlined:hover {
            font-size: 45px;
            transition: 0.2s;
        }

        .botoes-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-end;
            padding: 10px;
        }

        .comprar-btn,
        .final-btn {
            margin-left: 5px;
            border: none;
            background-color: #423acf;
            padding: 0.50rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .comprar-btn:hover,
        .final-btn:hover {
            color: #423acf;
            background-color: #fff;
            border: 2px solid #423acf;
            padding: 0.375rem 0.87rem;

        }

        .descricao {
            color: #423acf;
            text-align: justify;
            flex: 1;
        }

        .carrinho-pesq h2 {
            color: #1d134b;
            font-size: 28px;
            margin: 0;
            margin-bottom: 20px;
        }

        .input-container {
            display: flex;
            align-items: center;
        }

        .input-container input {
            width: 60px;
            color: #423acf;
            background-color: #fff;
            border: 2px solid #423acf;
            padding: 0.4rem;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
        }

        .input-container :focus-visible {
            border-color: 0px solid #423acf;
        }

        .finalizar {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .final-btn {
            border: none;
            background-color: #423acf;
            padding: 0.50rem 1rem;
            border-radius: 50px;
            cursor: pointer;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.2s;
            display: flex;
            align-items: center;
        }

        .final-btn:hover {
            color: #423acf;
            background-color: #fff;
            border: 2px solid #423acf;
            padding: 0.375rem 0.87rem;
        }

        .final-btn .material-symbols-outlined {
            font-size: 40px;
            color: #fff;
            margin-left: 5px;
            transition: font-size 0.2s, color 0.2s;
        }

        .final-btn:hover .material-symbols-outlined {
            font-size: 45px;
            color: #423acf;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navegador">
            <img src="public_html/assets/images/logo/logo.png" alt="" width="50px" height="50px">
            <a href="./" class="titulo">Fynder Foodie</a>
            <ul class="nav">
                <?php if (!isset($_SESSION['logado'])) { ?>
                    <li class="nav-item">
                        <button onclick="window.location.href='./?a=login'" class="botaoEC">Entrar</button>
                        <button onclick="window.location.href='./?a=cadastro'" class="botaoEC">Cadastrar</button>
                    </li>
                <?php } else { ?>
                    <li>
                        <button onclick="window.location.href='./?a=logout'" class="botaoEC">Sair</button>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <?php include('src/compras.php') ?>
        </div>
        <div class="finalizar">
            <button class="final-btn">Finalizar carrinho
                <span class="material-symbols-outlined">
                    payments
                </span>
            </button>
        </div>
    </main>
    <footer>
        <div class="rodape">
            <div class="boxs">
                <img src="public_html/assets/images/logo/logo.png" alt="" width="70px">
            </div>
            <div class="boxs">
                <h2>Páginas</h2> <br>
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><a href="./?a=suporte">Suporte</a></li>
                </ul>
            </div>
            <div class="boxs">
                <h2>Sobre nós</h2> <br>
                <ul>
                    <li><a href="./?a=sobre">Sobre a empresa</a></li>
                    <li><a href="./?a=oquefazemos">O que fazemos</a></li>
                </ul>
            </div>
            <div class="boxs">
                <h2>Contatos</h2> <br>
                <ul>
                    <li><a href="https://github.com/GabrielKleber" target="_blank">GitHub</a></li>
                    <li><a href="https://wa.me/558381958797" target="_blank">WhatsApp</a></li>
                </ul>
            </div>
        </div>
        <div class="copy">
            <p>&copy;<?php echo date('Y') ?> Copyright - Fynder Foodie</p>
        </div>
    </footer>
</body>

</html>