<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
if (isset($_POST['enviar'])) {
    $email = $_SESSION['email'];
    $id_adm = $gestor->query("SELECT id FROM adm WHERE email='$email'")->fetch()['id'];
    $id_menu = $_POST['com'];
    $id_tipo = $_POST['tipo'];
    $gestor->query("INSERT INTO menutipo VALUES($id_menu, $id_tipo, $id_adm)");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de Menu com Tipo</title>
</head>

<body>
    <form action="" method="post">
        <label for="com">Comida</label>
        <select name="com" id="com">
            <?php
            $com = $gestor->query("SELECT * FROM menu");
            while ($comidas = $com->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <option value="<?= $comidas['id'] ?>"><?= $comidas['nome'] ?></option>
            <?php } ?>
        </select>
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo">
            <?php
            $tipo = $gestor->query("SELECT * FROM tipo");
            while ($tipos = $tipo->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <option value="<?= $tipos['id'] ?>"><?= $tipos['tipo'] ?></option>
            <?php } ?>
        </select>
        <button name="enviar">Enviar</button>
    </form>
</body>

</html>