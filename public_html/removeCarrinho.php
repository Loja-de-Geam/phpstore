<?php 
header('Content-Type: application/json');
require('../config.php');
$gestor = $GLOBALS['gestor'];

$id = $_POST['id'];
$remove = $gestor->prepare("DELETE FROM pedido WHERE id=$id");
$remove->execute();

if($remove) {
    echo json_encode('removido');
} else {
    echo json_encode('Deu ruim');
}

?>