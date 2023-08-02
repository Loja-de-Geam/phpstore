<?php 

    $encapsular = false;

    // Entrando no BD
    $gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];

        $comando = $gestor->query("SELECT * FROM comidas WHERE nome LIKE '%$data%' or descricao LIKE '%$data%' ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);

        // Checagem para ver se o usuario existe
        if (sizeof($comando) >= 1) {

            $encapsular = true;

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
    <link rel="stylesheet" href="public_html/assets/css/style_inicio.css">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <title>Início</title>
    <style>
        .Vermelho1 {
            background-image: url('public_html/assets/comida/marmita/feijoada300x300.jpg');
            background-size: cover;
        }
        .Vermelho2 {
            background-image: url('public_html/assets/comida/marmita/LASANHA300x300.png');
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
    </style>
</head>
<body>
    <header>
        <nav class="navegador">
            <img src="public_html/assets/images/logo/logo.png" alt="" width="50px" height="50px">
            <a href="?a=inicio" class="titulo">Fynder Foodie</a>
            <div class="box-search">
                <input type="search" name="pesquisar" id="pesquisar" class="form-control" placeholder="Pesquisar">
                <button class="btn" onclick="searchData()">
                    <span class="material-symbols-outlined" id="btn-pesquisar">
                        search
                    </span>
                </button>
            </div>
            <ul class="nav">
                <?php if(!isset($_SESSION['logado'])) {?>
                    <li class="nav-item">
                        <button onclick="window.location.href='?a=login'" class="botaoEC">Entrar</button>
                        <button onclick="window.location.href='?a=cadastro'" class="botaoEC">Cadastrar</button>
                    </li>
                <?php }else {?>
                    <li>
                        <button onclick="window.location.href='?a=logout'" class="botaoEC">Sair</button>
                    </li>
                <?php }?>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="cinza">
                <div class="slides">
                    <!-- Radio Buttons -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">

                    <!-- Slide img -->
                    <div class="primeiro slide">
                        <img src="public_html/assets/comida/marmita/parmegiana600x300.png" alt="comidas">
                    </div>
                    <div class="slide">
                        <img src="public_html/assets/comida/bebida/iorgutedechocolate600x300.png" alt="bebidas">
                    </div>
                    <div class="slide">
                        <img src="public_html/assets/comida/doce/churros300x600.png" alt="doces">
                    </div>
                    
                    <!-- Navigation auto -->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                </div>

                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>

            <?php if(!$encapsular):?>
                </div>
                <div class="Vermelho1 salgado">
                    <button class="bb-expandir">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
                <div class="Amarelo1 salgado" backgroend-image: url() ;>
                    <button class="bb-expandir">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
                <div class="Amarelo2 salgado" backgroend-image: url() ;>
                    <button class="bb-expandir">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
                <div class="Vermelho2 salgado" backgroend-image: url() ;>
                    <button class="bb-expandir">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
                <div class="Vermelho3 salgado" backgroend-image: url() ;>
                    <button class="bb-expandir">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
                <div class="Amarelo3 salgado" backgroend-image: url() ;>
                    <button class="bb-expandir">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
            <?php endif;?>
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
                    <li><a href="?a=inicio">Home</a></li>
                    <li><a href="?a=suporte">Suporte</a></li>
                </ul>
            </div>
            <div class="boxs"> 
                <h2>Sobre nós</h2> <br>
                <ul>
                    <li><a href="?a=sobre">Sobre a empresa</a></li>
                    <li><a href="?a=oquefazemos">O que fazemos</a></li>
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
            <p>&copy;<?=date('Y') ?> Copyright - Fynder Foodie</p>
        </div>
    </footer>
    <script src="public_html\assets\js\slider.js"></script>
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
            if(event.key === "Enter") {
                searchData();
            }
        })

        function searchData() {
            window.location = '?search='+search.value;
        }
    </script>
</body>
</html>
