<?php 
header('Content-Type: application/json');
require('../config.php');
$gestor = $GLOBALS['gestor'];

$email = $_POST['email'];
$result = $gestor->query("SELECT id FROM usuarios WHERE email='$email'");
if($result->rowCount() > 0) {
    $id = $result->fetch()['id'];
    $query_select = "SELECT menu.*, pedido.id as ped_id FROM menu, pedido WHERE menu.id=pedido.id_produto AND pedido.id_cliente=$id AND pedido.estado='carrinho'";
    $pedidos_carrinho = $gestor->prepare($query_select);
    $pedidos_carrinho->execute();
    $dados = [true];
    while($comida = $pedidos_carrinho->fetch(PDO::FETCH_ASSOC)) {
        array_push($dados, $comida);
    }
    echo json_encode($dados);
} else {
    $dados = [false];
    echo json_encode($dados);
}
?>