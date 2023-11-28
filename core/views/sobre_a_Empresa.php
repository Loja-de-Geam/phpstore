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
            <div class="cabecario">
                <h1>Quem somos</h1>
                <img src="public_html/assets/images/logo/logo.png" alt="">
            </div>
            
        <div class="texto">
            <p>O Fynder Food é um site experimental de delivery desenvolvido pela equipe composta por Gabriel Kleber da Silva Batista, Mateus Soares da Rocha Cordeiro e Nafanael Pereira Alves. Este projeto oferece uma experiência abrangente aos usuários, permitindo que eles realizem diversas ações, incluindo:</p>
            
            <p>Cadastro e Login: Os usuários podem se registrar no site criando uma conta pessoal e fazer login para acessar suas informações e histórico de pedidos.</p>
            
            <p>Suporte e Tutoriais: O site disponibiliza um suporte dedicado que inclui tutoriais e formulários para melhorar a experiência do usuário, garantindo que todos possam utilizar o serviço de maneira eficaz.</p>
            
            <p>Pesquisa e Compra de Produtos: A principal funcionalidade do Fynder Food é permitir que os usuários pesquisem uma variedade de produtos disponíveis e façam pedidos para entrega. Isso torna mais fácil e conveniente para os clientes encontrarem e adquirirem os itens desejados.</p>
            
            <h2>O site foi construído com as seguintes linguagens</h2>
            
            <p><span>HTML (HyperText Markup Language):</span> O HTML é uma linguagem fundamental da web e é usada para estruturar o conteúdo da página, definindo a hierarquia dos elementos e seus significados.</p>
            
            <p><span>CSS (Cascading Style Sheets):</span> O CSS é responsável por controlar a apresentação visual do site, permitindo que os desenvolvedores personalizem a aparência e o layout dos elementos HTML.</p>
            
            <p><span>SQL (Structured Query Language):</span> O SQL é a linguagem padrão para interagir com bancos de dados relacionais. Ele é usado para armazenar, recuperar, atualizar e gerenciar os dados dos usuários, pedidos e produtos no banco de dados da Fynder Food.</p>
            
            <p><span>JavaScript:</span> JavaScript é uma linguagem de programação amplamente utilizada no desenvolvimento web. Ela é realizada no navegador do usuário e permite aprimorar a interatividade e a funcionalidade das páginas da web. No contexto do Fynder Food, o JavaScript pode ser usado para criar recursos dinâmicos, como atualização em tempo real de informações.</p>
            
            <p><span>PHP (Hypertext Preprocessor):</span> PHP é uma linguagem de script do lado do servidor usada para criar aplicativos web dinâmicos. No caso do Fynder Food, o PHP pode ser utilizado para processar solicitações do cliente, interagir com o banco de dados, como cálculos de preços e gestão de pedidos.</p>
        </div>


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