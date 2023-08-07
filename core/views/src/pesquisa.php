<?php 
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$query = "SELECT * FROM comidas WHERE nome LIKE '%$data%' or descricao LIKE '%$data%' ORDER BY id DESC";
$result = $gestor->prepare($query);
$result->execute();
while($comida = $result->fetch(PDO::FETCH_ASSOC)) {
?>
    <div>
        <div class="carrinho-pesq">
            <div class="imagem">
                <img src="public_html\assets\images\comidas\<?php echo $comida['img']?>" alt="<?php echo $comida["nome"]?>">
                <a href="?search=<?php echo $_GET['search']?>&?adicionar=<?php echo $comida['nome']?>" class="favoritar-btn"><span class="material-symbols-outlined">add_shopping_cart</span></a>
            </div>
        <div class="conteudo">
            <h2 class="nome"><?php echo $comida["nome"]?></h2>
            <p class="descricao"><?php echo $comida["descricao"]?></p>
        </div>
        <div class="botoes-container">
            <div class="input-container">
                <h1 class="preco">R$<?php echo $comida['preco']?></h1>
                <button class="comprar-btn">Comprar</button>
            </div>
        </div>
    </div>
<?php }?>