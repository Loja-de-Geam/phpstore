<?php

require('../config.php');

$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$prepare = $gestor->prepare('SELECT nome FROM menu WHERE nome LIKE :nome');
$prepare->execute([
    ':nome' => '%'.$_GET['pesquisa'].'%'
]);

$menu = $prepare->fetchAll();

echo json_encode($menu);
