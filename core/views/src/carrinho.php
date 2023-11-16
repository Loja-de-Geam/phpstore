<div class="janela-modal" id="janela-modal">
    <div class="carrinho-comp">
        <h2 class="car">Carrinho</h2>
        <?php if(isset($_SESSION['email'])) {?>
            <input type="hidden" name="email" class="email_u" value="<?= $_SESSION['email']?>">
        <?php }?>
        <div class="itens-carrinho">
        </div>
        <div class="finalizar-comp">
            <h3 class="total">Total a pagar: R$0.00</h3>
            <button id="finalizar-compra" onclick="window.location.href='./?a=finalizarCompras'">Finalizar compra</button>
        </div>  
    </div>
</div>