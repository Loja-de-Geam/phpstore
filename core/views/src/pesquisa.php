<?php
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$query = "SELECT * FROM menu";
$result = $gestor->prepare($query);
$result->execute();
while ($comida = $result->fetch(PDO::FETCH_ASSOC)) {
?>
    <div>
        <div class="produto">
            <div class="img">
                <img src="public_html\assets\images\comidas\<?php echo $comida['img'] ?>" alt="<?php echo $comida["nome"] ?>">
            </div>
            <div class="conteudo">
                <abbr title="Saiba Mais">
                    <button class="saibamais">
                        <i class="bi bi-plus"></i>
                    </button>
                </abbr>
                <h3 class="nome"><?php echo $comida["nome"] ?></h3>
                <p class="preco">R$<?php echo $comida['preco'] ?></p>
                <p class="descricao"><?php echo $comida["descricao"] ?></p>
            </div>
            <div class="addCarrinho">
                <button>
                    ADICIONAR
                </button>
            </div>
        </div>
    </div>
<?php } ?>