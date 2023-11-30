<?php 

    define('APP_NAME', 'Fynder Food');
    define('APP_VERSION', '1.0.0');

    // Banco de Dados MYSQL
    $host = 'localhost';
    $dataBase = 'fynderfood';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $gestor = new PDO("mysql:host=" . $host . ";dbname=" . $dataBase . ";charset=utf8", $user, $pass);
    $GLOBALS['gestor'] = $gestor;

?>