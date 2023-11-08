<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados da Comida</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            height: 600px;
            width: 500px;
            display: flex;
            flex-direction: column;
        }

        .caixa {
            display: flex;
            flex-direction: column;
            margin: 20px;
        }

        .caixa input,
        .caixa textarea {
            font-size: 0.8rem;
            padding: 0.8rem 1.2rem;
            border: none;
            resize: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #000000aa;
        }

        .caixa label {
            font-size: 1rem;
            margin-bottom: 10px;
            font-weight: bolder;
            color: #000000;
        }

        .caixa input:hover {
            background-color: #eeeeee75;
        }

        .caixa input:focus-visible {
            outline: 1px solid #9B59B6;
        }

        button {
            width: 100%;
            height: 40px;
            border: none;
            background-color: #423acf;
            /* Cor principal */
            padding: .4rem .7rem;
            border-radius: 20px;
            cursor: pointer;
            color: white;
            font-weight: bold;
            transition: .8s;
            margin-bottom: 10px;
        }

        button:hover {
            color: #423acf;
            /* Cor principal */
            border: 2px solid #423acf;
            /* Cor principal */
            background-color: #fff;
            margin-right: 5px;
            box-shadow: 0px 0px 10px #0000006b;
        }

        form h1 {
            margin-top: 0;
            text-align: center;
            color: #09072e;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <main>
        <div class="conteiner">

            <form action="" method="post">
                <h1>Editar</h1>
                <div class="caixa">
                    <label for="nome">Nome </label>
                    <input type="text" name="nome" id="nome" placeholder="Nome do produto" required>
                </div>
                <div class="caixa">
                    <label for="preco">Preço </label>
                    <input type="number" id="preco" name="preco" step="0.01" placeholder="Preço do produto" required>
                </div>
                <div class="caixa">
                    <label for="descricao">Descrição Curta</label><br>
                    <input type="text" name="descricao" id="descricao" maxlength="50">
                </div>
                <div class="caixa">
                    <label for="descricao">Descrição para o "Saiba Mais"</label><br>
                    <textarea name="descricao_saiba_mais" id="descricao_saiba_mais" cols="30" rows="10"></textarea>
                </div>
                <div class="caixa">
                    <button name="update">Enviar</button>
                    <button class="voltar" onclick="window.location.href='./?a=comidas'">Voltar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>

<?php

if (isset($_POST['update'])) {
    $gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $desc = $_POST['descricao'];
    $descricao_saiba_mais = $_POST['descricao_saiba_mais'];
    $data = date('Y-m-d');

    if (isset($_GET['id'])) {
        $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
        $sql_update = "UPDATE menu SET nome='$nome', descricao='$desc', descricao_saiba_mais='$descricao_saiba_mais', preco=$preco, data_adicionamento_modificacao='$data' WHERE id=$id";

        $result = $gestor->query($sql_update);
    }

    header('Location: ./?a=comidas');
}

?>