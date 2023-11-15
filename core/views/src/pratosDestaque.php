<?php 

$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
$query = "SELECT menu.* FROM pedido, menu WHERE menu.id=pedido.id_produto GROUP BY id_produto ORDER BY count(id_produto) DESC LIMIT 2;";

$result = $gestor->prepare($query);
$result->execute();

while($comida = $result->fetch(PDO::FETCH_ASSOC)) {
?>

<div class="prato">
    <div class="imagem">
        <img src="public_html\assets\images\comidas\<?php echo $comida['img'] ?>" alt="<?php echo $comida["nome"] ?>">
    </div>
    <div class="informacoes">
        <h3><?php echo $comida["nome"] ?></h3>
        <p><?php echo $comida["descricao"] ?></p>
    </div>
    <div class="preco-acao">
        <span class="preco">R$<?= number_format($comida['preco'], 2, '.', '') ?></span>
        <button class="cta-button" onclick="saibaMais(<?= $comida['id']?>)">Saiba Mais</button>
    </div>
</div>

<?php 
}
?>


