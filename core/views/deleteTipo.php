<?php 
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
    $sql_delete = "DELETE FROM tipo WHERE id=$id";
    $sql_delete_2 = "DELETE FROM menutipo WHERE id_tipo=$id";

    $gestor->query($sql_delete_2);
    $gestor->query($sql_delete);
}

header('Location: ./?a=tipo');
?>