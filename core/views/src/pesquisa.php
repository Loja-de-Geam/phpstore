<?php 
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$query = "SELECT * FROM comidas WHERE nome LIKE '%$data%' or descricao LIKE '%$data%' ORDER BY id DESC";
$result = $gestor->prepare($query);
$result->execute();
while($comida = $result->fetch(PDO::FETCH_ASSOC)) {
?>
    <div>
        <div class="carrinho-pesq">
            <div class="imagem">
                <img src="public_html\assets\images\comidas\<?=$comida['img']?>" alt="<?= $comida["nome"]?>">
                <button class="favoritar-btn"><span class="material-symbols-outlined">add_shopping_cart</span></button>
            </div>
        <div class="conteudo">
            <h2 class="nome"><?= $comida["nome"]?></h2>
            <p class="descricao"><?= $comida["descricao"]?></p>
        </div>
        <div class="botoes-container">
            <div class="input-container">
                <input type="number" min="1" value="1" max="100">
                <button class="comprar-btn">Comprar</button>
            </div>
        </div>
    </div>
<?php }?>