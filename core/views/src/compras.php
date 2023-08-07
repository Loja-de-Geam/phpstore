<?php 
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
?>
<div>
    <div class="carrinho-pesq">
        <div class="imagem">
            <img src="public_html/assets/comida/salgado/empada300x300.png" alt="Foto da Comida">
            <button class="favoritar-btn">
                <span class="material-symbols-outlined">
                    remove_shopping_cart
                </span>
            </button>
        </div>
    <div class="conteudo">
        <h2>Nome da Comida</h2>
        <p class="descricao">Descrição da comida Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et enim ac nunc lacinia mattis nec quis mi. Lorem ipsum dolor sit amet </p>
    </div>
    <div class="botoes-container">
        <div class="input-container">
            <button class="comprar-btn">Comprar</button>
        </div>
    </div>
</div>