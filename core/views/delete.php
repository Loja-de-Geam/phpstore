<?php
if (!isset($_SESSION['adm'])) {
    header('Location: ./');
}

use core\classes\DataBase;
if (isset($_GET['id'])) {
    $data = new DataBase();
    $data->deleteComida();
}

header('Location: ./?a=comidas');
?>