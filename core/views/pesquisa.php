<?php 
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$query = "SELECT * FROM comidas WHERE nome LIKE '%$data%' or descricao LIKE '%$data%' ORDER BY id DESC";
$result = $gestor->prepare($query);
$result->execute();
while($comida = $result->fetch(PDO::FETCH_ASSOC)) {
?>
    <p><?php echo $comida["nome"]?></p>
<?php }?>