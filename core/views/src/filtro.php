<?php
$gestor = $GLOBALS['gestor'];

$maior_preco = $gestor->query("SELECT MAX(preco) AS maior FROM menu")->fetch()["maior"];
$menor_preco = $gestor->query("SELECT MIN(preco) AS menor FROM menu")->fetch()["menor"];

$tipo = $gestor->query('SELECT * FROM tipo');
?>
<div id="filtro-janela">
    <form action="./?a=menu&filtro" method="post">
        <div class="tela-filtro">
            <div class="titulo">
                <h2>Filtro de produtos</h2>
            </div>
            <div class="preco-maximo">
                <h3>Preço máximo</h3>
                <h4>R$ <span id="span"><?= number_format($maior_preco, 2, '.', '') ?></span></h4>
                <input type="range" name="preco-maximo" id="precoMax" class="preco" min="<?= $menor_preco ?>" max="<?= $maior_preco ?>" value="<?= $maior_preco ?>" step=".1">
            </div>
            <div class="tags">
                <?php while ($tags = $tipo->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div>
                        <input type="checkbox" name="tags[]" id="<?= $tags['id'] ?>" class="tags-input" value="<?= $tags['id'] ?>" checked>
                        <label for="<?= $tags['id'] ?>" class="tags-label">
                            <abbr title="Desmarcar">
                                <i class="bi bi-x"></i>
                            </abbr>
                            <?= $tags["tipo"] ?>
                        </label>
                    </div>
                <?php } ?>
            </div>
            <div class="btn-sub">
                <button>Filtrar</button>
            </div>
        </div>
    </form>
</div>

<script>
    
    const valor_span = document.querySelector('#span');
    const valor_input = document.querySelector('#precoMax');

    valor_input.oninput = function() {
        let value = valor_input.value;
        valor_span.textContent = value;

        var percentage = (this.value - this.min) / (this.max - this.min) * 100;
        this.style.background = 'linear-gradient(to right, #800080 0%, #3498DB ' + percentage + '%, #9dceee ' + percentage + '%, #9dceee 100%)';
    }
</script>

