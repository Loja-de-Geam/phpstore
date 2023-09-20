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
            background-image: linear-gradient(to bottom, #002366, #004080);
        }

        .conteiner {
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            max-width: 1500px;
            text-align: center;
            
            background-color: #fff;
            box-shadow: 0px 8px 40px #000000b4;
        }

        table th,td {
            border-bottom: 1px solid black;
            padding: 8px 25px 8px 25px;
        }

        a {
            text-decoration: none;
        }

        .btn-edit {
            font-size: 1.6em;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
            color: white;
        }

        .edit {
            background-color: #2f00ffaa;
        }

        .delete {
            background-color: #f00a;
        }
        tbody > tr:nth-child(odd) { 
            background-color: #dff0ff;
        }
        .voltar {
          font-size: 15px;
          width: 20%;
          padding: 10px 0px;
          margin-top: 15px;
          border: 3px solid #fff;
          border-radius: 20px;
          outline: none;
          font-weight: bold;
          letter-spacing: 1px;
          color: #fff;
          background: #3498DB;
          box-shadow: 0px 10px 40px -12px var(--sombra_colorida);
          
      }
      .voltar:hover {
          cursor: pointer;
          background-color: transparent;
          color: #fff;
      }
    </style>
</head>

<body>

    <main>
        <div class="conteiner">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
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
            <button class="voltar" onclick="window.location.href='./?a=adm'">Voltar</button>
        </div>
    </main>

</body>

</html>