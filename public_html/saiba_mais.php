<?php

require('../config.php');

$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);

$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
$query = "SELECT * FROM menu WHERE id = :id LIMIT 1";
$resultado = $gestor->prepare($query);
$resultado->execute(
    [
        ':id' => $id
    ]
);

if (($resultado->rowCount() == 1) && ($resultado)) {
    while ($produtos = $resultado->fetch(PDO::FETCH_ASSOC)) {
        $dados[] = [
            "id" => $produtos['id'],
            "nome" => $produtos['nome'],
            "descricao" => $produtos['descricao'],
            "preco" => $produtos['preco'],
            "img" => $produtos['img'],
        ];
    }
} else {
    $query = "SELECT * FROM menu WHERE id = :id LIMIT 1";
    $resultado = $gestor->prepare($query);
    $resultado->execute(
        [
            ':id' => 1
        ]
    );

    while ($produtos = $resultado->fetch(PDO::FETCH_ASSOC)) {
        $dados[] = [
            "id" => $produtos['id'],
            "nome" => $produtos['nome'],
            "descricao" => $produtos['descricao'],
            "preco" => $produtos['preco'],
            "img" => $produtos['img'],
        ];
    }
}

echo json_encode($dados);
