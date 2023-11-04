<?php
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$precoMax = $_SESSION['preco-maximo'];

$categoria = $_SESSION['tags'];

$pagina = 1;
$limite = 6;

$registros = $gestor->query("SELECT COUNT(menu.id) count FROM menu")->fetch()["count"];

$paginas = ceil($registros / $limite);

if (isset($_GET['pagina']) && $_GET['pagina'] > 0 && $_GET['pagina'] <= $paginas) {
    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
}

$inicio = ($pagina * $limite) - $limite;

$id_comida = [];
foreach ($categoria as $key) {
    $result = $gestor->query("SELECT menu.id FROM menu, tipo, menutipo WHERE menu.preco <= $precoMax AND menutipo.id_menu = menu.id AND menutipo.id_tipo = tipo.id AND tipo.id = $key");

    foreach ($result as $id) {
        if (!in_array($id, $id_comida)) {
            array_push($id_comida, $id);
        }
    }
}
$comidas = [];
foreach ($id_comida as $key) {
    foreach ($key as $id_com) {
        if (!in_array($id_com, $comidas)) {
            array_push($comidas, $id_com);
        }
    }
}
sort($comidas, SORT_NATURAL);
$fil_comidas = [];
for ($i = 1; $i < ($paginas + 1); $i++) {
    $com_temp = [];
    for ($j = (($i * $limite) - $limite); $j < ($limite * $i); $j++) {
        if (isset($comidas[$j])) {
            array_push($com_temp, $comidas[$j]);
        }
    }
    array_push($fil_comidas, $com_temp);
}

$paginas = 0;
foreach ($fil_comidas as $qwert) {
    if (count($qwert) != 0) {
        $paginas += 1;
    }
}
if ($paginas == 0) {
    include('sem_registro.php');
}
foreach ($fil_comidas[$pagina - 1] as $comida) {
    $query_com = "SELECT * FROM menu WHERE id = $comida";
    $result_query = $gestor->prepare($query_com);
    $result_query->execute();
    while ($comida = $result_query->fetch(PDO::FETCH_ASSOC)) {
?>
        <div>
            <div class="produto">
                <div class="img">
                    <img src="public_html\assets\images\comidas\<?php echo $comida['img'] ?>" alt="<?php echo $comida["nome"] ?>">
                </div>
                <div class="prod-mais">
                    <button onclick="saibaMais(<?= $comida['id'] ?>)">
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
<?php
    }
}
?>

<div class="paginas">
    <div class="opc">
        <?php if ($pagina > 1) { ?>
            <a href="?a=menu&filtro&pagina=1">Primeira</a>
            <a href="?a=menu&filtro&pagina=<?php if ($pagina - 1 == 0) {
                                                echo $pagina = 1;
                                            } else {
                                                echo $pagina - 1;
                                            } ?>"><i class="bi bi-arrow-bar-left"></i></a><?php } ?>
        <p><?= $pagina ?></p>
        <?php if ($pagina < $paginas) { ?>
            <a href="?a=menu&filtro&pagina=<?php if ($pagina == $paginas) {
                                                echo $paginas;
                                            } else {
                                                echo $pagina + 1;
                                            } ?>"><i class="bi bi-arrow-bar-right"></i></a>
            <a href="?a=menu&filtro&pagina=<?= $paginas ?>">Última</a><?php } ?>
    </div>
</div>