<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

$gestor = $GLOBALS['gestor'];
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
$comida_id = $gestor->query("SELECT * FROM menu WHERE id=$id");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css">
    <title>Editar dados da Comida</title>
    <style>
        @charset "UTF-8";

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

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

        .conteiner {
            width: 60%;
            height: 85vh;
            display: flex;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.308);
            border-radius: 7px;
        }

        .form {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fff;
            padding: 3rem;
            border-radius: 7px;
        }



        .grupo_input {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0.3rem 0;
        }

        .caixa {
            display: flex;
            flex-direction: column;
            margin-bottom: 1.1rem;
        }

        .caixa input,
        .caixa textarea {
            font-size: 0.8rem;
            padding: 0.8rem 1.2rem;
            border: none;
            resize: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000007c;

        }

        .caixa input:hover,
        .caixa textarea:hover {
            background-color: #eeeeee75;
        }

        .caixa input:focus-visible,
        .caixa textarea:focus-visible {
            outline: 1px solid #6c63ff;
        }

        .caixa label {
            font-size: 1rem;
            margin-bottom: 10px;
            font-weight: bolder;
            color: #000000;
        }

        .caixa input::placeholder {
            color: #000000be;
        }

        button {
            width: 100%;
            margin-top: 0.5rem;
            border: none;
            background-color: #423acf;
            padding: 0.62rem;
            border-radius: 20px;
            cursor: pointer;
            color: #fff;
            font-size: 0.93rem;
            font-weight: bolder;
        }

        button:hover {
            color: #423acf;
            background-color: #fff;
            border: 1px solid #423acf;
            padding: 0.56rem;
        }

        .voltar {
            color: #000;
            text-decoration: none;
            padding-top: 5px;
            font-size: 1.19em;
            transition: .8s;
        }

        .voltar:hover {
            color: #423acf;
            font-weight: bold;
            text-decoration: underline;
        }

        .form h1 {
            margin-top: 0;
            font-size: 3rem;
            color: #09072e;
            margin-bottom: 3rem;
        }
    </style>
</head>

<body>

    <div class="conteiner">
        <div class="form">
            <h1>Editar</h1>
            <?php while ($resultado = $comida_id->fetch(PDO::FETCH_ASSOC)) { ?>
                <form action="" method="post">

                    <div class="grupo_input">
                        <div class="caixa">
                            <label for="nome">Nome </label>
                            <input type="text" name="nome" id="nome" placeholder="Nome do produto" required value="<?= $resultado['nome'] ?>">
                        </div>
                        <div class="caixa">
                            <label for="preco">Preço </label>
                            <input type="number" id="preco" name="preco" step="0.01" placeholder="Preço do produto" required value="<?= number_format($resultado['preco'], 2, '.', '') ?>">
                        </div>
                        <div class="caixa">
                            <label for="descricao">Descrição Curta</label>
                            <input type="text" name="descricao" id="descricao" maxlength="50" placeholder="Descrição curta" value="<?= $resultado['descricao'] ?>">
                        </div>
                        <div class="caixa">
                            <label for="descricao">Descrição para o "Saiba Mais"</label><br>
                            <textarea name="descricao_saiba_mais" id="descricao_saiba_mais" cols="30" rows="10" value="<?= $resultado['descricao_saiba_mais'] ?>"></textarea>
                        </div>
                    </div>
                    <div class="enviar">
                        <button name="update">Enviar</button>
                    </div>
                </form>
            <?php } ?>
            <a class="voltar" onclick="window.location.href='./?a=comidas'">Voltar</a>
        </div>
    </div>

</body>

</html>

<?php

if (isset($_POST['update'])) {
    $email = $_SESSION['email'];
    $id_adm = $gestor->query("SELECT id FROM adm WHERE email='$email'")->fetch()['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $desc = $_POST['descricao'];
    $descricao_saiba_mais = $_POST['descricao_saiba_mais'];
    $data = date('Y-m-d');

    if (isset($_GET['id'])) {
        $sql_update = "UPDATE menu SET id_adm=$id_adm, nome='$nome', descricao='$desc', descricao_saiba_mais='$descricao_saiba_mais', preco=$preco, data_adicionamento_modificacao='$data' WHERE id=$id";

        $result = $gestor->query($sql_update);
    }

    echo "<script>window.location.href='./?a=comidas'</script>";
}

?>