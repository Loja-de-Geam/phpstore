<?php
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$maior_preco = $gestor->query("SELECT MAX(preco) AS maior FROM menu")->fetch()["maior"];
$menor_preco = $gestor->query("SELECT MIN(preco) AS menor FROM menu")->fetch()["menor"];
?>
<div id="filtro-janela">
    <div class="tela-filtro">
        <div class="titulo">
            <h2>Filtro de produtos</h2>
        </div>
        <div class="preco-maximo">
            <h3>Preço maximo: </h3>
            <h4>R$<span id="span"><?= $maior_preco ?></span></h4>
            <input type="range" name="preco-maximo" id="precoMax" min="<?= $menor_preco ?>" max="<?= $maior_preco ?>" value="<?= $maior_preco ?>" step=".1">
        </div>
    </div>
</div>

<script>
    const valor_span = document.querySelector('#span');
    const valor_input = document.querySelector('#precoMax');

    valor_input.oninput = (() => {
        let value = valor_input.value;
        valor_span.textContent = value;
    })
</script>