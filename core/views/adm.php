<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

if (isset($_POST['enviar'])) {

    // Acessa o BD
    $gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $img = $_FILES['foto']["name"];

    move_uploaded_file($_FILES['foto']['tmp_name'], "../public_html/assets/images/comidas/" . $_FILES['foto']['name']);

    $comando = $gestor->query("INSERT INTO menu VALUES (NULL, '$nome', '$descricao', $preco, '$img')");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <title>Formulário de Produto</title>
    <style>
        @charset "UTF-8";

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
        /*
Azul Muito Escuro: #001F3F
Azul Escuro Profundo: #002366
Azul Médio: #3498DB
Roxo Intenso: #800080
Roxo Profundo: #663399
Roxo Claro: #9B59B6
Azul Claro: #5E9DC8

*/

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(to bottom, #002366, #004080);
        }

        .container {
            width: 60%;
            height: 90vh;
            display: flex;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.308);
            border-radius: 7px;
        }

        .form {
            width: 100%;
            display: flex;
            flex-direction: column;
            
            background-color: #fff;
            padding: 3rem;
            border-radius: 7px;
        }

        

        .voltar {
            font-size: 15px;
            width: 30%;
            padding: 10px 0px;
            margin-top: 15px;
            border: 3px solid #800080;
            border-radius: 20px;
            outline: none;
            font-weight: bold;
            letter-spacing: 1px;
            color: #800080;
            background: #fff;
            box-shadow: 0px 10px 40px -12px var(--sombra_colorida);
            transition: all .3s ease;

        }

        .voltar:hover {
            border-color: #004080;
            cursor: pointer;
            background-color: transparent;
            color: #800080;
        }

        .form h1 {
            text-align: center;
            margin-top: 0;
            font-size: 2.5rem;
            color: #09072e;
            margin-bottom: 3rem;
        }
        ul > li {
            list-style-type: none;
        }

        @media screen and (max-width: 768px) {
            .container {
                width: 100%;
                height: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>Painel administrativo</h1>
            <ul>
                <li><button class="voltar" onclick="window.location.href='./?a=cadComidas'">Cadastrar produto</button></li>
                <li> <button class="voltar" onclick="window.location.href='./?a=comidas'">Ver lista de produtos</button></li>
            </ul>
        </div>
    </div>
</body>
</html>