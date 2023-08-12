<?php
$gestor = new PDO("mysql:host=" . MYSQL_SERVER . ";dbname=" . MYSQL_DATABASE . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

$query = "SELECT * FROM comidas WHERE nome LIKE '%$data%' or descricao LIKE '%$data%' ORDER BY id DESC";
$result = $gestor->prepare($query);
$result->execute();
while ($comida = $result->fetch(PDO::FETCH_ASSOC)) {
?>
    <div>
        <div class="produto">
            <div class="img">
                <img src="public_html\assets\images\comidas\<?php echo $comida['img'] ?>" alt="<?php echo $comida["nome"] ?>">
                <abbr title="Saiba mais">
                    <button class="saibamais">
                        <span class="material-symbols-outlined">
                            add
                        </span>
                    </button>
                </abbr>
            </div>
            <div class="conteudo">
                <h3 class="nome"><?php echo $comida["nome"] ?></h3>
                <p class="descricao"><?php echo $comida["descricao"] ?></p>
                <p class="preco">R$<?php echo $comida['preco'] ?></p>
            </div>
            <div class="addCarrinho">
                <button>
                    ADICIONAR
                </button>
            </div>
        </div>
    </div>
<?php } ?>