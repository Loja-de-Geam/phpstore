<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" />
    <link rel="stylesheet" href="public_html/assets/css/s_inicio.css">
    <link rel="stylesheet" href="public_html/assets/css/carrinho.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <title>Início</title>
    <style>
        /*
Azul Muito Escuro: #001F3F
Azul Escuro Profundo: #002366
Azul Médio: #3498DB
Roxo Intenso: #800080
Roxo Profundo: #663399
Roxo Claro: #9B59B6
Azul Claro: #5E9DC8

*/
.pratos-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.titulo h2 {
    
    font-size: 32px;
    text-align: center;
    margin-bottom: 20px;

}

.prato {
    width: calc(50% - 10px); /* Para deixar espaço entre os pratos */
    background-color: #001F3F;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
}

.prato .imagem {
    width: 100%;
    padding: 0 10px;
}

.prato .imagem img {
    max-width: 100%;
    border-radius: 5px;
}

.prato .informacoes {
    padding: 0 10px;
}

.prato h3 {
    color: #fff;
    font-size: 24px;
    margin: 0;
    margin-bottom: 5px;
}

.prato p {
    color: #fff;
    font-size: 14px;
    margin: 0;
    margin-bottom: 10px;
}

.prato .preco-acao {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.prato .preco {
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    margin: 0;
    margin-right: 15px;
}

.prato .cta-button {
    margin-top: 15px;
    padding: 10px 20px;
    background-color: #800080;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: 0.3s;
}

.prato .cta-button:hover {
    background-color: #663399;
}

/* CSS para Avaliações em Destaque */
.avaliacoes, .informacoes-contato, .sustentabilidade {
    margin-bottom: 20px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.6);
}

.avaliacoes h3, .informacoes-contato h3, .sustentabilidade  h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.avaliacao {
    margin-bottom: 10px;
}

.comentario, .informacoes-contato p, .sustentabilidade  p {
    font-size: 14px;
    margin-bottom: 5px;
}

.autor {
    font-size: 12px;
    color: #888;
}
/* CSS para Informações de Contato */

.sustentabilidade ul {
    list-style: disc;
    padding-left: 20px;
}

.sustentabilidade li {
    font-size: 14px;
    margin-bottom: 5px;
}

/*--------------------------------------------------------------------------------------------------- */


    </style>
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
            <?php include("src/comidas.php");?>
        </div>
        <div class="titulo">
            <h2>Pratos em Destaque</h2>
        </div>
    <section class="pratos-container">
    <div class="prato">
        <div class="imagem">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBequyUXvALfzWSa-vOUbGWWhM9lNSAIQzcA&usqp=CAU" alt="Nome do Prato 1">
        </div>
        <div class="informacoes">
            <h3>Nome do Prato 1</h3>
            <p>Descrição curta do prato. Lorem ipsum dolor sit amet...</p>
        </div>
        <div class="preco-acao">
            <span class="preco">R$ 15.99</span>
            <a href="#" class="cta-button">Ver mais</a>
        </div>
    </div>

    <div class="prato">
        <div class="imagem">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBequyUXvALfzWSa-vOUbGWWhM9lNSAIQzcA&usqp=CAU" alt="Nome do Prato 2">
        </div>
        <div class="informacoes">
            <h3>Nome do Prato 2</h3>
            <p>Descrição curta do prato. Lorem ipsum dolor sit amet...</p>
        </div>
        <div class="preco-acao">
            <span class="preco">R$ 18.99</span>
            <a href="#" class="cta-button">Ver mais</a>
        </div>
    </div>
</div>

    </section>
    <section>
        
<div class="avaliacoes">
    <h3>Avaliações em Destaque</h3>
    <div class="avaliacao">
        <p class="comentario">"Comida deliciosa! Recomendo o prato de massa."</p>
        <p class="autor">- João Silva</p>
    </div>
    <div class="avaliacao">
        <p class="comentario">"Serviço de entrega rápido e comida quente."</p>
        <p class="autor">- Maria Souza</p>
    </div>
</div>
<div class="informacoes-contato">
    <h3>Informações de Contato</h3>
    <p>Telefone: (123) 456-7890</p>
    <p>E-mail: contato@fynderfoodie.com</p>
    <p>Horário de Atendimento: Seg-Sex, 9h-18h</p>
 
</div>

<div class="sustentabilidade">
    <h3>Compromisso com a Sustentabilidade</h3>
    <p>Nosso restaurante se preocupa com o meio ambiente e adota práticas sustentáveis, como:</p>
    <ul>
        <li>Embalagens biodegradáveis</li>
        <li>Produtos orgânicos</li>
        <li>Redução do desperdício de alimentos</li>
        
    </ul>
</div>



    </section>

    </main>
    <!--==============================================================================================-->
    <footer>
        <?php include("src/rodape.php");?>
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