<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/inicio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" />
    <link rel="stylesheet" href="..\public\assets\css\inicio.css">
    <link rel="shortcut icon" href="assets\images\logo\favicon.ico" type="image/x-icon">
    <title>Início</title>
</head>
<body>
    <header>
        <nav class="navegador">
            <img src="assets\images\logo\LOGO.png" alt="" width="50px" height="50px">
            <a href="/phpstore/public" class="titulo">Fynder Foodie</a>
            <ul class="nav">
                <li class="nav-item"><a href="#">Home</a></li>
                <li class="nav-item"><a href="#">About</a></li>
                <li class="nav-item"><a href="#">Menu</a></li>
                <li class="nav-item"><a href="#">Contact</a></li>
                <li class="nav-item">
                    <button onclick="window.location.href='/phpstore/public/?a=login'" class="botaoEC">Entrar</button>
                    <button onclick="window.location.href='/phpstore/public/?a=cadastro'" class="botaoEC">Cadastrar</button>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="cinza"></div>
            <div class="Vermelho1"><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Amarelo1"><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Amarelo2"><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Vermelho2"><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Vermelho3"><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
            <div class="Amarelo3"><button class="bb-expandir"><span class="material-symbols-outlined">expand_more</span></button></div>
        </div>
    </main>
    <!--==============================================================================================-->
    <footer>
        <div class="rodape">
            <div class="boxs">
                <img src="assets\images\logo\LOGO.png" alt="" width="70px">
            </div>
            <div class="boxs">
                <h2>Páginas</h2> <br>
                <ul>
                    <li><a href="/phpstore/public/">Home</a></li>
                    <li><a href="/phpstore/public/?a=suporte">Suporte</a></li>
                </ul>
            </div>
            <div class="boxs"> 
                <h2>Sobre nós</h2> <br>
                <ul>
                    <li><a href="/phpstore/public/?a=termos">Sobre a empresa</a></li>
                    <li><a href="/phpstore/public/">O que fazemos</a></li>
                </ul>
            </div>
            <div class="boxs">
                <h2>Contatos</h2> <br>
                <ul>
                    <li><a href="#" target="_blank">GitHub</a></li>
                    <li><a href="#" target="_blank">WhatsApp</a></li>
                </ul>
            </div>
        </div>
        <div class="copy">
            <p>&copy;<?=date('Y')?> Copyright - Fynder Foodie</p>
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
