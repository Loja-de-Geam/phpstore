<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

$gestor = $GLOBALS['gestor'];
if (isset($_POST['enviar'])) {
    $email = $_SESSION['email'];
    $id_adm = $gestor->query("SELECT id FROM adm WHERE email='$email'")->fetch()['id'];
    $id_menu = $_POST['com'];
    $id_tipo = $_POST['tipo'];
    $gestor->query("INSERT INTO menutipo VALUES(NULL, $id_menu, $id_tipo, $id_adm)");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .container {
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
            flex-direction: column;
            justify-content: space-between;
            padding: 0.3rem 0;
        }

        .caixa {
            display: flex;
            flex-direction: column;
            margin-bottom: 1.1rem;
        }

        .caixa select {
            font-size: 1rem;
            padding: 0.8rem 1.2rem;
            border: none;
            resize: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000007c;

        }

        .caixa select:hover,
        .caixa textarea:hover {
            background-color: #eeeeee75;
        }

        .caixa select:focus-visible,
        .caixa textarea:focus-visible {
            outline: 1px solid #6c63ff;
        }

        .caixa label {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: bolder;
            color: #000000;
        }

        .caixa select::placeholder {
            color: #000000be;
        }

        .adicionar button {
            width: 100%;
            margin-top: 2.5rem;
            border: none;
            background-color: #423acf;
            padding: 0.62rem;
            border-radius: 20px;
            cursor: pointer;
            color: #fff;
            font-size: 0.93rem;
            font-weight: bolder;
        }

        .adicionar button:hover {
            color: #423acf;
            background-color: #fff;
            border: 1px solid #423acf;
            padding: 0.56rem;
        }

        .form h1 {
            margin-top: 0;
            font-size: 3rem;
            color: #09072e;
            margin-bottom: 3rem;
        }

        .link_comidas {
            color: #000;
            text-decoration: none;
            padding-top: 5px;
            font-size: 1.19em;
            transition: .8s;
        }

        .link_comidas:hover {
            color: #423acf;
            font-weight: bold;
            text-decoration: underline;
        }

        @media screen and (max-width: 768px) {
            .container {
                width: 100%;
                height: 100%;
            }
        }
    </style>
    <title>cadastro de Menu com Tipo</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <h1>Cadastrar tipo para produto</h1>
            <form action="" method="post">
                <div class="grupo_input">
                    <div class="caixa">
                        <label for="com">Comida</label>
                        <select name="com" id="com">
                            <?php
                            $com = $gestor->query("SELECT * FROM menu");
                            while ($comidas = $com->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?= $comidas['id'] ?>"><?= $comidas['nome'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="caixa">
                        <label for="tipo">Tipo</label>
                        <select name="tipo" id="tipo">
                            <?php
                            $tipo = $gestor->query("SELECT * FROM tipo");
                            while ($tipos = $tipo->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?= $tipos['id'] ?>"><?= $tipos['tipo'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="adicionar">
                <button name="enviar">Enviar</button>
                </div>
            </form>
            <a href="./?a=adm" class="link_comidas">ADM</a>
        </div>    
    </div>
</body>

</html>