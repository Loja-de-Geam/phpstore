<?php
use core\classes\DataBase;

$data = new DataBase();
$result = $data->paginacaoDinamica('menu', 6);
$pagina = $data->getPagina();
$paginas = $data->getPaginaFinal(6);
while ($comida = $result->fetch(PDO::FETCH_ASSOC)) {
?>
    <div>
        <div class="produto">
            <div class="img">
                <img src="public_html\assets\images\comidas\<?php echo $comida['img'] ?>" alt="<?php echo $comida["nome"] ?>">
            </div>
            <div class="prod-mais">
                <button onclick="saibaMais(<?= $comida['id']?>)">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
            <div class="conteudo">
                <h3 class="nome"><?= $comida['nome'] ?></h3>
                <p class="preco">R$<?= number_format($comida['preco'], 2, '.', '') ?></p>
                <p class="descricao"><?= $comida['descricao'] ?></p>
            </div>
        </div>
    </div>
<?php } ?>

<div class="paginas">
    <div class="opc">
        <?php if ($pagina > 1) { ?>
            <a href="?a=menu&pagina=1">Primeira</a>
            <a href="?a=menu&pagina=<?php if ($pagina - 1 == 0) {
                                        echo $pagina = 1;
                                    } else {
                                        echo $pagina - 1;
                                    } ?>"><i class="bi bi-arrow-bar-left"></i></a><?php } ?>
        <p><?= $pagina ?></p>
        <?php if ($pagina < $paginas) { ?>
            <a href="?a=menu&pagina=<?php if ($pagina == $paginas) {
                                        echo $paginas;
                                    } else {
                                        echo $pagina + 1;
                                    } ?>"><i class="bi bi-arrow-bar-right"></i></a>
            <a href="?a=menu&pagina=<?= $paginas ?>">Última</a><?php } ?>
    </div>
</div>