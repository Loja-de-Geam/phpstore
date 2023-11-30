<?php 

    // Iniciando sessão
    session_start();

    // Carregando todas as classesdo projeto
    require_once('../vendor/autoload.php');

    // Carregar sistema de rotas
    require_once('../core/rotas.php'); 

    // Carregando o Gestor do Config
    $gestor = $GLOBALS['gestor'];

    // Vendo se o usuario vai se cadastrar
    if (!isset($_SESSION['logado']) && isset($_POST['cadastrar'])) {

        // Preparação do comando
        $comando = $gestor->prepare("INSERT INTO usuarios VALUES (NULL, :nome, :telefone, :email, :cpf, :senha, :genero, :data)");

        // Execução do comando
        $comando->execute(

            [
                ':nome' => $_POST['nome'],
                ':telefone' => $_POST['celular'],
                ':email' => $_POST['email'],
                ':cpf' => $_POST['cpf'],
                ':senha' => $_POST['senha'],
                ':genero' => $_POST['genero'],
                ':data' => date('Y-m-d')
            ]

        );

        $_SESSION['logado'] = true;
        $_SESSION['email'] = $_POST['email'];

        // Redirecionamento para a página inicial
        echo "<script>window.location.href='./'</script>";

    }

    // Vendo se o usuario vai se logar
    if(!isset($_SESSION['logado']) && isset($_POST['acao'])) {

        // Preparação para o comando do BD(prevenir mysql injection)
        $comando = $gestor->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha LIMIT 1");

        // Execução do comando(apos a verificação da variavel email e senha)
        $comando->execute(

            [
                ':email' => $_POST['email'],
                ':senha' => $_POST['senha']
            ]

        );

        // Checagem para ver se o usuario existe
        if ($comando->rowCount() == 1) {

            $_SESSION['logado'] = true;
            $_SESSION['email'] = $_POST['email'];

            // Redirecionamento para a página inicial
            echo "<script>window.location.href='./'</script>";
            
        }

    }

    if(!isset($_SESSION['logado']) && isset($_POST['acao'])) {

        // Preparação para o comando do BD(prevenir mysql injection)
        $comando = $gestor->prepare("SELECT * FROM adm WHERE email = :email AND senha = :senha LIMIT 1");

        // Execução do comando(apos a verificação da variavel email e senha)
        $comando->execute(

            [
                ':email' => $_POST['email'],
                ':senha' => $_POST['senha']
            ]

        );

        // Checagem para ver se o usuario existe
        if ($comando->rowCount() == 1) {

            $_SESSION['logado'] = true;
            $_SESSION['adm'] = true;
            $_SESSION['email'] = $_POST['email'];

            // Redirecionamento para a página inicial
            echo "<script>window.location.href='./'</script>";

        }
    }

?>