<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public_html\assets\css\s_inicio.css">
    <link rel="stylesheet" href="public_html\assets\css\sobre.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <title>Sobre a Empresa</title>
</head>

<body>
    <header>
        <nav class="navegador">
            <abbr title="Fynder Food">
                <a href="./" class="titulo">
                    <img src="public_html/assets/images/logo/logo.png" alt="" width="50px" height="50px">
                    <h3>Fynder Food</h3>
                </a>
            </abbr>
            <div class="nav-bar">
                <nav>
                    <ul>
                        <li class="itens"><a href="./?a=menu">Menu</a></li>
                        <li class="itens marcado"><a href="./?a=sobre">Quem somos</a></li>
                        <li class="itens"><a href="./?a=oquefazemos">O que fazemos</a></li>
                        <li class="itens"><a href="https://wa.me/558381958797" target="_blank">Fale Conosco</a></li>
                    </ul>
                </nav>
            </div>
            <?php if (!isset($_SESSION['logado'])) { ?>
                <div class="nav-item">
                    <abbr title="Logar">
                        <button onclick="window.location.href='./?a=login'" class="botaoEC">
                            <i class="bi bi-person"></i>
                        </button>
                    </abbr>
                </div>
            <?php } else { ?>
                <div>
                    <abbr title="Sair">
                        <button onclick="window.location.href='./?a=logout'" class="botaoEC">
                            <i class="bi bi-person-dash"></i>
                        </button>
                    </abbr>
                </div>
            <?php } ?>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Teste</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias dolor unde magni quia earum distinctio quae assumenda illum dolores quo fugiat reiciendis tenetur rerum corporis nisi vero, neque explicabo. Amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, tempora ea eligendi suscipit reiciendis aut incidunt quia. Adipisci voluptatem tempora magni doloremque, similique velit officia consectetur ut perspiciatis voluptatibus sapiente?</p>
        </div>
    </main>
    <!--==============================================================================================-->

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