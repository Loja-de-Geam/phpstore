<?php 
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
    $sql_dalete = "DELETE FROM menu WHERE id=$id";

    $resultDelete = $gestor->query($sql_dalete);
}

header('Location: ./?a=comidas');
?>