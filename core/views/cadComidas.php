<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

if (isset($_POST['enviar'])) {

    // Acessa o BD
    $gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $descricao_saiba_mais = $_POST['descricao_saiba_mais'];
    $preco = $_POST['preco'];
    $data = date('Y-m-d');
    $img = $_FILES['foto']["name"];

    move_uploaded_file($_FILES['foto']['tmp_name'], "../public_html/assets/images/comidas/" . $_FILES['foto']['name']);

    $comando = $gestor->query("INSERT INTO menu VALUES (NULL, '$nome', '$descricao', '$descricao_saiba_mais', $preco, '$img', '$data')");
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
</head>

<body>
    <div class="container">
        <div class="form">
            <h1>Cadastro de produtos</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="grupo_input">
                    <div class="caixa">
                        <label for="nome" >Nome do produto</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite o nome do produto" required>
                    </div>
                    <div class="caixa">
                        <label for="descricao" >Descrição Curta</label>
                        <input type="text" name="descricao" id="descricao" placeholder="Digite a descrição curta" maxlength="50">
                    </div>
                    <div class="caixa">
                        <label for="preco" >Preço</label>
                        <input type="number" id="preco" name="preco" step="0.01" placeholder="Digite o preço do produto" required>
                    </div>
                    <div class="caixa">
                        <label for="descricao" >Descrição Para o "Saiba Mais"</label>
                        <textarea name="descricao_saiba_mais" id="descricao_saiba_mais" cols="30" rows="10"></textarea>
                    </div>
                    <div class="caixa">
                        <label for="foto" >Foto</label>
                        <input type="file" id="foto" name="foto" accept="image/*" required>
                    </div>
                    
                </div>
                <div class="adicionar">
                    <button type="submit" name="enviar">Adicionar</button>
                </div>
            </form>
            <a href="./?a=comidas" class="link_comidas">Comidas</a>
        </div>
    </div>
</body>

</html>