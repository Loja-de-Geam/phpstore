<?php 
    namespace core\controladores;

    session_start();

    $_SESSION['carrinho'] = array();

    $_SESSION['carrinho'][] = $_POST['adicionar'];

    print_r($_SESSION['carrinho']);

?>