<?php 

header('Content-Type: application/json');
$gestor = new PDO("mysql:host=" . 'localhost' . ";dbname=" . 'fynderfood' . ";charset=utf8", 'root', '');

$email_u = $_POST['email'];
$id_prod = $_POST['id'];
$data = date('Y-m-d H:i:s');

$con = $gestor->query("SELECT id FROM usuarios WHERE email='$email_u'")->fetchAll(PDO::FETCH_ASSOC);
$id_u = $con[0]['id'];
$ins = $gestor->prepare("INSERT INTO pedido VALUES(NULL, :user, :pro, 'carrinho', :da)");
$ins->execute([
    ':user' => $id_u,
    ':pro' => $id_prod,
    ':da' => $data
]);
echo json_encode($id_u);
