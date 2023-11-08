<?php 

require('../config.php');

$id_comp = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);   

$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$email_cli = 'gabrielkleber54321n@gmail.com';
$id_cli = $gestor->query("SELECT id FROM usuarios WHERE email='$email_cli'")->fetch(PDO::FETCH_ASSOC);

$data_pedido = date('Y-m-d H:i:s');

$insert_pedido = $gestor->prepare("INSERT INTO pedido VALUES(NULL, :id_cli, :id_comp, NULL, :data_pedido)");
$insert_pedido->execute(
    [
        ':id_cli' => $id_cli,
        ':id_comp' => $id_comp,
        ':data_pedido' => $data_pedido
    ]
);

if($insert_pedido) {
    $resp[] = 'OK';
} else {
    $resp[] = 'Nada OK';
}
$resp = 'oi';

echo json_encode($resp);

?>