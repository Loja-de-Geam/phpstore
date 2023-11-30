<?php 
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

$gestor = $GLOBALS['gestor'];
if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
    $sql_delete = "DELETE FROM menutipo WHERE id=$id";

    $gestor->query($sql_delete);

    
header('Location: ./?a=menuTipo');
}