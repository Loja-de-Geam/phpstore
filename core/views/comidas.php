<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
$query = "SELECT * FROM menu";
$result = $gestor->prepare($query);
$result->execute();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title><?= APP_NAME ?> | Comidas cadastradas</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        main {
            width: 100vw;
            height: 100vh;
            background-color: #EDE9D8;
        }

        .conteiner {
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
        }

        table {
            border-collapse: collapse;
            width: 98%;
            max-width: 1500px;
            text-align: center;
            border: 1px solid black;
            background-color: #fffc;
        }

        table th,
        td {
            border-bottom: 1px solid black;
            padding: 5px 25px 5px 25px;
        }

        a {
            text-decoration: none;
        }

        .btn-edit {
            font-size: 1.6em;
            border-radius: 5px;
            padding: 3px;
            cursor: pointer;
            color: white;
        }

        .edit {
            background-color: #2f00ffaa;
        }

        .delete {
            background-color: #f00a;
        }
    </style>
</head>

<body>

    <main>
        <div class="conteiner">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data_menu = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?= $data_menu["id"] ?></td>
                            <td><?= $data_menu["nome"] ?></td>
                            <td>R$<?= $data_menu["preco"] ?></td>
                            <td><?= $data_menu["descricao"] ?></td>
                            <td>
                                <a href="?a=edit&?id=<?= $data_menu['id'] ?>">
                                    <i class="bi bi-pencil-square btn-edit edit"></i>
                                </a>
                                <a href="?a=delete&?id=<?= $data_menu['id'] ?>">
                                    <i class="bi bi-trash btn-edit delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>