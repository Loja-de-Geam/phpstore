<?php
use core\classes\DataBase;

$data = new DataBase();
$result = $data->pratosDestaque();

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


