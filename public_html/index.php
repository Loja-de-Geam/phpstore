<?php 

    // Iniciando sessão
    session_start();

    // Import das classes
    use core\classes\DataBase;

    // Carregando todas as classesdo projeto
    require_once('../vendor/autoload.php');

    // Carregar sistema de rotas
    require_once('../core/rotas.php'); 

    // Carregando as funções da base de dados
    $data = new DataBase();

    // Vendo se o usuario vai se cadastrar
    if (!isset($_SESSION['logado']) && isset($_POST['cadastrar'])) {
        $data->cadastroUsuario($_POST['nome'], $_POST['celular'], $_POST['email'], $_POST['cpf'], $_POST['senha'], $_POST['genero']);
    }

    // Vendo se o usuario vai se logar
    if(!isset($_SESSION['logado']) && isset($_POST['acao'])) {
        $data->loginUsuario($_POST['email'], $_POST['senha']);        
    }

?>