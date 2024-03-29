<?php
use core\classes\DataBase;

$data = new DataBase();
$maior_preco = $data->getMaiorPreco();
$menor_preco = $data->getMenorPreco();
$tipo = $data->viewTipo();
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
        let value = parseFloat(valor_input.value).toFixed(2);
        valor_span.textContent = value;

        // Mantenha os valores não formatados para a manipulação do controle deslizante
        var percentage = (this.value - this.min) / (this.max - this.min) * 100;
        this.style.background = 'linear-gradient(to right, #800080 0%, #3498DB ' + percentage + '%, #9dceee ' + percentage + '%, #9dceee 100%)';
    }
</script>
