<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$pagina = 1;
$limite = 5;

$registros = $gestor->query("SELECT COUNT(id_menu) count FROM menutipo ")->fetch()["count"];

$paginas = ceil($registros / $limite);

if (isset($_GET['pagina']) && $_GET['pagina'] > 0 && $_GET['pagina'] <= $paginas) {
    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
}

$inicio = ($pagina * $limite) - $limite;
$query = "SELECT menutipo.id, menu.nome, tipo.tipo FROM menutipo, menu, tipo WHERE menu.id=menutipo.id_menu AND menutipo.id_tipo=tipo.id ORDER BY id_menu LIMIT $inicio, $limite";
$result = $gestor->prepare($query);
$result->execute();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu e tipo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Comida</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($tipagem = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?= $tipagem['id'] ?></td>
                    <td><?= $tipagem['nome'] ?></td>
                    <td><?= $tipagem['tipo'] ?></td>
                    <td>
                        <a href="?a=deletetipo&id=<?= $tipagem['id'] ?>">
                            <i class="bi bi-trash btn-edit delete"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <div class="paginas">
            <?php if ($pagina > 1) { ?>
                <a href="?a=menuTipo&pagina=1">Primeira</a>
                <a href="?a=menuTipo&pagina=<?php if ($pagina - 1 == 0) {
                                                echo $pagina = 1;
                                            } else {
                                                echo $pagina - 1;
                                            } ?>"><i class="bi bi-arrow-bar-left"></i></a><?php } ?>
            <p><?= $pagina ?></p>
            <?php if ($pagina < $paginas) { ?>
                <a href="?a=menuTipo&pagina=<?php if ($pagina == $paginas) {
                                                echo $paginas;
                                            } else {
                                                echo $pagina + 1;
                                            } ?>"><i class="bi bi-arrow-bar-right"></i></a>
                <a href="?a=menuTipo&pagina=<?= $paginas ?>">Última</a><?php } ?>
        </div>
    </table>
</body>

</html>