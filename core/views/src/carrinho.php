<div class="janela-modal" id="janela-modal">
    <div class="carrinho-comp">
        <h2 class="car">Carrinho</h2>
        <input type="hidden" name="email" class="email_u" value="<?= $_SESSION['email']?>">
        <div class="prod">
            <abbr title="Remover do Carrinho">
                <button class="btn-remove">
                    <i class="bi bi-trash-fill"></i>
                </button>
            </abbr>
            <div class="aparencia-prod">
                <img src="" alt="" class="img-prod-car">
                <h3 class="nome-prod"></h3>
            </div>
            <div class="desc-prod">
                <p class="desc-car"></p>
                <p class="preco"></p>
            </div>
        </div>
        <div class="finalizar-comp">
            <h3 class="total">Total a pagar: R$0,0</h3>
            <button>Finalizar compra</button>
        </div>
    </div>
</div>