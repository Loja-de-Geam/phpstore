<?php 
header('Content-Type: application/json');
$gestor = new PDO("mysql:host=" . 'localhost' . ";dbname=" . 'fynderfood' . ";charset=utf8", 'root', '');

$email = $_POST['email'];
$result = $gestor->query("SELECT id FROM usuarios WHERE email='$email'");
if($result->rowCount() > 0) {
    $id = $result->fetch()['id'];
    $query_up = "UPDATE pedido SET estado='comprado' WHERE id_cliente=$id;";
    $update = $gestor->prepare($query_up);
    $update->execute();
    echo json_encode('Compra finalizada');
}

?>