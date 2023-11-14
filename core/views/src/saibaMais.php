<div id="saiba-mais">
    <div class="itens">
        <div class="img">
            <img src="" alt="" id="imagem-saiba-mais">
        </div>
        <div class="produ">
            <h2 class="nome" id="nome-produto-saiba-mais"></h2>
            <p class="descricao" id="descricao-produto-saiba-mais"></p>
            <p class="preco" id="preco-produto-saiba-mais"></p>
            <div class="add-carrinho">
                <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] == true && !isset($_SESSION['adm'])) { ?>
                    <input type="hidden" name="email" id="email_u" value="<?= $_SESSION['email']?>">
                    <abbr title="Adicione ao carrinho">
                        <button class="btn-add-car" id="butao-produto-carrinho">
                            <i class="bi bi-cart2"></i>
                        </button>
                    </abbr>
                <?php } elseif(isset($_SESSION['adm']) && $_SESSION['adm'] == true) { ?>
                    <abbr title="Administrador não pode realizar compras, por favor faça logout">
                        <button class="btn-add-car" id="butao-produto-carrinho" onclick="window.location.href='./?a=logout'" class="botaoEC">
                            <i class="bi bi-person-dash"></i>
                        </button>
                    </abbr>
                <?php } else { ?>
                    <abbr title="Faça login para adicionar ao carrinho">
                        <button class="btn-add-car" id="butao-produto-carrinho" onclick="window.location.href='./?a=login'">
                            <i class="bi bi-person"></i>
                        </button>
                    </abbr>
                <?php } ?>
            </div>
        </div>
    </div>
</div>