<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" />
    <link rel="stylesheet" href="public_html/assets/css/s_inicio.css">
    <link rel="stylesheet" href="public_html/assets/css/pesquisa.css">
    <link rel="stylesheet" href="public_html/assets/css/carrinho.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <title>Início</title>
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
                        <li class="itens marcado"><a href="./?a=menu">Menu</a></li>
                        <li class="itens"><a href="./?a=sobre">Quem somos</a></li>
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
            <?php if (isset($_SESSION['adm'])) { ?>
                <abbr title="admin">
                    <a href="?a=adm" class="adm">
                        <i class="bi bi-plus-circle"></i>
                    </a>
                </abbr>
            <?php } ?>
            <div>
                <abbr title="Carrinho">
                    <button class="carrinho" onclick="carrinho()">
                        <div class="info-carrinho">
                            <i class="bi bi-bag"></i>
                            <div class="quant-preco">
                                <span class="span-carrinho">
                                    R$0.00
                                </span><br>
                                <span class="span-carrinho">
                                    0
                                </span>
                            </div>
                        </div>
                    </button>
                </abbr>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="filtrar">
                <button class="filtro">
                    Filtrar <i class="bi bi-filter"></i>
                </button>
            </div>
            <div class="prod">
                <?php if (!empty($_GET['filtro'])) {
                    echo 'existe oia';
                } else {
                    include('src/pesquisa.php');
                } ?>
            </div>
            <div class="paginas">
                <div class="opc">
                    <?php if ($pagina > 1) { ?>
                        <a href="?a=menu&pagina=1">Primeira</a>
                        <a href="?a=menu&pagina=<?php if ($pagina - 1 == 0) {
                                                    echo $pagina = 1;
                                                } else {
                                                    echo $pagina - 1;
                                                } ?>"><i class="bi bi-arrow-bar-left"></i></a><?php } ?>
                    <p><?= $pagina ?></p>
                    <?php if ($pagina < $paginas) { ?>
                        <a href="?a=menu&pagina=<?php if ($pagina == $paginas) {
                                                    echo $paginas;
                                                } else {
                                                    echo $pagina + 1;
                                                } ?>"><i class="bi bi-arrow-bar-right"></i></a>
                        <a href="?a=menu&pagina=<?= $paginas ?>">Última</a><?php } ?>
                </div>
            </div>
        </div>

    </main>
    <!--==============================================================================================-->
    <footer>
        <?php include("src/rodape.php"); ?>
    </footer>
    <!----------------------------------------------------------------------------------------->
    <script src="public_html\assets\js\slider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-umd-min.js"></script>
    <script src="public_html\assets\js\pesquisas.js"></script>
    <?php include('src/carrinho.php') ?>
    <script src="public_html\assets\js\carrinho.js"></script>
</body>

</html>