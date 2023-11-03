<?php
$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
?>
<div id="saiba-mais">
    <div class="itens">
        <div class="img">
            <img src="public_html\assets\images\comidas\buchada.jpg" alt="">
        </div>
        <div class="produ">
            <h2 class="nome">Nome do produto</h2>
            <p class="descricao">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ipsum necessitatibus optio? Reprehenderit officia perferendis excepturi, blanditiis temporibus sit eum, assumenda perspiciatis corrupti qui cumque sint provident, dolorum esse veritatis.
            </p>
            <p class="preco">R$50.00</p>
            <?= $_GET?>
        </div>
    </div>
</div>