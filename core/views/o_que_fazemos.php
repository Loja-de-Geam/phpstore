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
    <title>O que fazemos</title>
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
                        <li class="itens"><a href="./?a=sobre">Quem somos</a></li>
                        <li class="itens marcado"><a href="./?a=oquefazemos">O que fazemos</a></li>
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
            <h1>O que Fazemos - O Fynder Foodie</h1>
            <p>O Fynder Foodie é uma inovadora solução de entrega de refeições através da internet, projetada para trazer praticidade e satisfação aos amantes da boa comida. Disponível em uma ampla gama de dispositivos eletrônicos, desde smartphones e smartwatches a laptops e tablets, estamos aqui para tornar mais fácil do que nunca para os usuários encontrarem deliciosas opções de alimentação acessíveis, onde quer que estejam.</p>

            <p>Com a nossa presença multiplataforma, oferecemos aos usuários a conveniência de acessar o Fynder Foodie em qualquer dispositivo de sua preferência. Seja no conforto de casa, no escritório ou em movimento, basta alguns cliques para explorar um universo de sabores e escolher entre uma variedade de restaurantes e cardápios.</p>

            <p>Nossa plataforma intuitiva e fácil de usar permite que os usuários naveguem por uma seleção diversificada de restaurantes e estabelecimentos parceiros. Com uma interface amigável, recursos de busca avançados e filtros personalizáveis, o Fynder Foodie ajuda a encontrar exatamente o que você deseja, seja uma pizza quentinha, um prato gourmet ou opções veganas e saudáveis.</p>

            <p>Além disso, valorizamos a experiência do usuário, fornecendo informações detalhadas sobre os estabelecimentos, como avaliações, horários de funcionamento, opções de entrega e promoções especiais. Queremos garantir que cada pedido seja uma experiência satisfatória, desde o momento da escolha até a entrega do prato à sua porta.</p>

            <p>Acreditamos que a comida é mais do que apenas uma necessidade - é uma forma de expressão cultural e prazer. Por isso, buscamos parcerias com restaurantes renomados e locais exclusivos, para oferecer aos nossos usuários uma ampla variedade de opções gastronômicas. Seja para uma refeição rápida e prática ou para uma ocasião especial, o Fynder Foodie está aqui para atender a todos os gostos e preferências.</p>

            <p>Estamos comprometidos em fornecer um serviço de entrega confiável e eficiente. Trabalhamos em estreita colaboração com nossos restaurantes parceiros para garantir que cada refeição seja preparada com cuidado e entregue de forma segura e pontual. Nosso objetivo é superar as expectativas dos clientes, garantindo uma experiência de entrega excepcional.</p>

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
