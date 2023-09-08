<?php

$encapsular = true;
$resultado = false;
$data = '';

// Entrando no BD
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

if (!empty($_GET['search'])) {
    $data = $_GET['search'];

    $comando = $gestor->query("SELECT * FROM menu WHERE nome LIKE '%$data%' or descricao LIKE '%$data%' ORDER BY id DESC")->fetchAll();

    // Checagem para ver se o usuario existe
    if (sizeof($comando) >= 1) {

        $encapsular = false;
    } else {

        $encapsular = false;
        $resultado = true;
    }
}

?>

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
    <style>
        .Vermelho1 {
            background-image: url('public_html/assets/comida/marmita/feijoada300x300.jpg');
            background-size: cover;
        }

        .Vermelho2 {
            /* background-image: url('public_html/assets/comida/marmita/LASANHA300x300.png'); */
            background-size: cover;
        }

        .Vermelho3 {
            background-image: url('public_html/assets/comida/marmita/strogonoff_de_carne300x300.jpg');
            background-size: cover;
        }

        .Amarelo1 {
            background-image: url('public_html/assets/comida/marmita/parmegiana600x300.png');
            background-size: cover;
        }

        .Amarelo2 {
            background-image: url('public_html/assets/comida/marmita/parmegiana600x300.png');
            background-size: cover;
        }

        .Amarelo3 {
            background-image: url('public_html/assets/comida/marmita/yakisoba600x300.png');
            background-size: cover;
        }

        .semresut {
            text-align: center;
        }

        .semresut>img {
            width: 500px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navegador">
            <abbr title="Fynder Foodie">
                <a href="./" class="titulo">
                    <img src="public_html/assets/images/logo/logo.png" alt="" width="50px" height="50px">
                </a>
            </abbr>
            <div class="box-search">
                <input type="search" name="pesquisar" id="pesquisar" class="form-control" placeholder="Pesquisar" value="<?= $data ?>">
                <button class="btn" onclick="searchData()">
                    <span class="material-symbols-outlined" id="btn-pesquisar">
                        search
                    </span>
                </button>
                <div class="auto-complete"></div>
                <select name="tipo" id="tipo">
                    <option value="" selected disabled>...</option>
                    <option value="massa">Massa</option>
                    <option value="frios">Frios</option>
                    <option value="bebidas">Bebidas</option>
                    <option value="doces">Doces</option>
                </select>
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
            <?php if ($encapsular) {
                include("src/comidas.php");
            } elseif (!$encapsular && !$resultado) {
                include("src/pesquisa.php");
            } else {
                include("src/semresut.php");
            } ?>
        </div>
    </main>
    <!--==============================================================================================-->
    <footer>
        <?php if ($encapsular) {
            include("src/rodape.php");
        } ?>
    </footer>
    <script src="public_html\assets\js\slider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-umd-min.js"></script>
    <script src="public_html\assets\js\pesquisas.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.bb-expandir');
            const divs = document.querySelectorAll('.Vermelho1, .Vermelho2, .Vermelho3, .Amarelo1, .Amarelo2, .Amarelo3');

            buttons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    const div = divs[index];
                    divs.forEach((divItem, divIndex) => {
                        if (divIndex === index) {
                            divItem.classList.toggle('expandir');
                        } else {
                            divItem.classList.remove('expandir');
                        }
                    });
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.bb-expandir');

            buttons.forEach((button) => {
                button.addEventListener('click', function() {
                    const span = button.querySelector('span.material-symbols-outlined');
                    if (span.textContent === 'expand_more') {
                        span.textContent = 'expand_less';
                    } else {
                        span.textContent = 'expand_more';
                    }
                });
            });
        });
    </script>
    <script>
        var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                searchData();
            }
        })

        function searchData() {
            window.location = '?search=' + search.value;
        }
    </script>
    <?php include('src/carrinho.php') ?>
    <script src="public_html\assets\js\carrinho.js"></script>
</body>

</html>