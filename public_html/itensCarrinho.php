<?php 
header('Content-Type: application/json');
$gestor = new PDO("mysql:host=" . 'localhost' . ";dbname=" . 'fynderfood' . ";charset=utf8", 'root', '');

$email = $_POST['email'];
$result = $gestor->query("SELECT id FROM usuarios WHERE email='$email'");
if($result->rowCount() > 0) {
    $id = $result->fetch()['id'];
    $query_select = "SELECT menu.* FROM menu, pedido WHERE menu.id=pedido.id_produto AND pedido.id_cliente=$id AND pedido.estado='carrinho'";
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