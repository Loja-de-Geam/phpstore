<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\assets\css\inicio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" />
    <link rel="shortcut icon" href="public\assets\images\logo\favicon.ico" type="image/x-icon">
    <title>Bebidas</title>
    <style>
        .Vermelho1 {
        background-image: url('public/assets/comida/bebida/cola300x300.png');
        }
        .Vermelho2 {
            background-image: url('public/assets/comida/bebida/GELADINHA300x300.png');
        }
        .Vermelho3 {
            background-image: url('public/assets/comida/bebida/cola300x300.png');
        }
        .Amarelo1 {
                background-image: url('public/assets/comida/bebida/iorgute/de/chocolate600x300.png');
        }
        .Amarelo2 {
            background-image: url('public/assets/comida/bebida/milkshake/de/morango600x300.png');
        }
        .Amarelo3 {
            background-image: url('public/assets/comida/bebida/raspadinha600x300.jpg');
        }
    </style>
</head>
<body>
    <header>
        <nav class="navegador">
            <img src="public/assets/images/logo/logo.png" alt="" width="50px" height="50px">
            <a href="/" class="titulo">Fynder Foodie</a>
            <ul class="nav">
                <li class="nav-item"><a href="#">Home</a></li>
                <li class="nav-item"><a href="#">About</a></li>
                <li class="nav-item"><a href="#">Menu</a></li>
                <li class="nav-item"><a href="#">Contact</a></li>
                <li class="nav-item">
                    <button onclick="window.location.href='?a=login'" class="botaoEC">Entrar</button>
                    <button onclick="window.location.href='?a=cadastro'" class="botaoEC">Cadastrar</button>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="cinza">
            </div>
            <div class="Vermelho1"><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Amarelo1" backgroend-image: url() ;><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Amarelo2" backgroend-image: url() ;><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Vermelho2" backgroend-image: url() ;><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Vermelho3" backgroend-image: url() ;><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Amarelo3" backgroend-image: url() ;><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
        </div>
    </main>
    <!--==============================================================================================-->
    <footer>
        <div class="rodape">
            <div class="boxs">
                <img src="public/assets/images/logo/logo.png" alt="" width="70px">
            </div>
            <div class="boxs">
                <h2>Páginas</h2> <br>
                <ul>
                    <li><a href="/">Home</a></li>
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
</body>
</html>
