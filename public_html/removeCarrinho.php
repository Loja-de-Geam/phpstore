<?php 
header('Content-Type: application/json');
$gestor = new PDO("mysql:host=" . 'localhost' . ";dbname=" . 'fynderfood' . ";charset=utf8", 'root', '');

$id = $_POST['id'];
$remove = $gestor->prepare("DELETE FROM pedido WHERE id=$id");
$remove->execute();

if($remove) {
    echo json_encode('removido');
} else {
    echo json_encode('Deu ruim');
}

?>