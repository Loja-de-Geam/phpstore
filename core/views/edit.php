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
            background-color: #EDE9D8;
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
            height: 500px;
            width: 300px;
            display: flex;
            flex-direction: column;
        }

        .caixa {
            display: flex;
            flex-direction: column;
            margin: 20px;
        }

        button {
            margin-top: 70px;
            width: 100%;
            height: 40px;
            border: none;
            background-color: #423acf;
            padding: .4rem .7rem;
            border-radius: 20px;
            cursor: pointer;
            color: white;
            font-weight: bold;
            transition: .8s;
        }

        button:hover {
            color: #423acf;
            border: 2px solid #423acf;
            background-color: #fff;
            margin-right: 5px;
            box-shadow: 0px 0px 10px #0000006b;
        }
    </style>
</head>

<body>
    <main>
        <div class="conteiner">
            <form action="" method="post">
                <div class="caixa">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" placeholder="Nome do produto" required>
                </div>
                <div class="caixa">
                    <label for="preco">Preço: </label>
                    <input type="number" id="preco" name="preco" step="0.01" placeholder="Preço do produto" required>
                </div>
                <div class="caixa">
                    <label for="descricao">Descrição: </label><br>
                    <textarea id="descricao" name="descricao" cols="30" rows="5" placeholder="Descrição do produto" required></textarea>
                </div>
                <div class="caixa">
                    <button name="att">Enviar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>