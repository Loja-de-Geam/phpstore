<?php 
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

$gestor = $GLOBALS['gestor'];
if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
    $sql_delete = "DELETE FROM menu WHERE id=$id";
    $sql_delete_2 = "DELETE FROM menutipo WHERE id_menu=$id";
    $sql_delete_3 = "DELETE FROM pedido WHERE id_produto=$id";

    $gestor->query($sql_delete_3);
    $gestor->query($sql_delete_2);
    $gestor->query($sql_delete);
}

header('Location: ./?a=comidas');
?>