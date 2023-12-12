<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}
use core\classes\DataBase;

$data = new DataBase();
$result = $data->pagDinamicaMenuTipo('menutipo');
$pagina = $data->getPagina();
$paginas = $data->getPaginaFinal($data->countid('menutipo'));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <title>Menu e tipo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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

        table th,
        td {
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

        tbody>tr:nth-child(odd) {
            background-color: #dff0ff;
        }

        .paginas {
            display: flex;
        }

        .paginas a {
            text-decoration: none;
            background-color: #fff;
            border: 3px solid #fff;
            margin: 0 10px;
            color: black;
            padding: 10px 20px;
            background-color: #3498DB;
            border-radius: 20px;
            outline: none;
            font-weight: bold;
            letter-spacing: 1px;
            color: #fff;
            background: #3498DB;
            box-shadow: 0px 10px 40px -12px var(--sombra_colorida);
            transition: all .3s ease;
        }

        .paginas a:hover {
            cursor: pointer;
            background-color: transparent;
            color: #fff;
        }

        .paginas p {
            margin: 8px;
            font-size: 1.4em;
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
            transition: all .3s ease;

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
                        <th>Comida</th>
                        <th>Tipo</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($tipagem = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?= $tipagem['id'] ?></td>
                            <td><?= $tipagem['nome'] ?></td>
                            <td><?= $tipagem['tipo'] ?></td>
                            <td>
                                <a href="?a=deleteMenuTipo&id=<?= $tipagem['id'] ?>">
                                    <i class="bi bi-trash btn-edit delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                </table>
                <div class="paginas">
                    <?php if ($pagina > 1) { ?>
                        <a href="?a=menuTipo&pagina=1">Primeira</a>
                        <a href="?a=menuTipo&pagina=<?php if ($pagina - 1 == 0) {
                                                        echo $pagina = 1;
                                                    } else {
                                                        echo $pagina - 1;
                                                    } ?>"><i class="bi bi-arrow-bar-left"></i></a><?php } ?>
                    <p><?= $pagina ?></p>
                    <?php if ($pagina < $paginas) { ?>
                        <a href="?a=menuTipo&pagina=<?php if ($pagina == $paginas) {
                                                        echo $paginas;
                                                    } else {
                                                        echo $pagina + 1;
                                                    } ?>"><i class="bi bi-arrow-bar-right"></i></a>
                        <a href="?a=menuTipo&pagina=<?= $paginas ?>">Última</a><?php } ?>
                </div>
                <button class="voltar" onclick="window.location.href='./?a=adm'">Voltar</button>
        </div>
    </main>
</body>

</html>