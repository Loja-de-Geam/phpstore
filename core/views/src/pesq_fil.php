<?php
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$precoMax = $_POST['preco-maximo'];

$categoria = $_POST['tags'];

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
foreach ($comidas as $comida) {
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
                <div class="conteudo">
                    <abbr title="Saiba Mais">
                        <button class="saibamais">
                            <i class="bi bi-plus"></i>
                        </button>
                    </abbr>
                    <h3 class="nome"><?php echo $comida["nome"] ?></h3>
                    <p class="preco">R$<?php echo $comida['preco'] ?></p>
                    <p class="descricao"><?php echo $comida["descricao"] ?></p>
                </div>
                <div class="addCarrinho">
                    <button>
                        ADICIONAR
                    </button>
                </div>
            </div>
        </div>
<?php
    }
}
?>