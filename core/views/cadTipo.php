<?php 
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

if(isset($_POST['enviar'])) {
    $gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

    $email = $_SESSION['email'];
    $id_adm = $gestor->query("SELECT id FROM adm WHERE email='$email'")->fetch()['id'];
    $tipo = $_POST['tipo'];
    $data = date('Y-m-d');

    $gestor->query("INSERT INTO tipo VALUES(NULL, $id_adm, '$tipo', '$data');");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Tipo</title>
</head>
<body>
    <form action="" method="post">
        <label for="tipo">Nome do tipo</label>
        <input type="text" name="tipo" id="tipo">
        <button name="enviar">Enviar</button>
    </form>
</body>
</html>