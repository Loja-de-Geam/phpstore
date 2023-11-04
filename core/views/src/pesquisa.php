<?php
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$pagina = 1;
$limite = 6;

$registros = $gestor->query("SELECT COUNT(id) count FROM menu ")->fetch()["count"];

$paginas = ceil($registros / $limite);

if (isset($_GET['pagina']) && $_GET['pagina'] > 0 && $_GET['pagina'] <= $paginas) {
    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
}

$inicio = ($pagina * $limite) - $limite;

$query = "SELECT * FROM menu ORDER BY id LIMIT $inicio, $limite";
$result = $gestor->prepare($query);
$result->execute();
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
                <p class="preco">R$<?= $comida['preco'] ?></p>
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