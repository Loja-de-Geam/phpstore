function itensCarrinho() {
    $(function(e) {
        var email_u = document.querySelector('.email_u').value;
        var itensCarrinho = document.querySelector('.itens-carrinho');
        $.ajax({
            url: './public_html/itensCarrinho.php',
            method: 'POST',
            data: {email: email_u},
            dataType: 'json'
        }).done(function(result) {
            if(result[0] == true) {
                itensCarrinho.innerHTML = ""
                for (let i = 1; i < result.length; i++) {
                    const element = result[i];
                    itensCarrinho.innerHTML += '<div class="prod"> <abbr title="Remover do Carrinho"> <button class="btn-remove"> <i class="bi bi-trash-fill"></i> </button> </abbr> <div class="aparencia-prod"> <img src="public_html\\assets\\images\\comidas\\'+ element['img'] +'" alt="'+ element['nome'] +'" class="img-prod-car"> <h3 class="nome-prod">'+ element['nome'] +'</h3> </div><div class="desc-prod"><p class="desc-car">'+ element['descricao_saiba_mais'] +'</p> <p class="preco">R$'+ element['preco'].toFixed(2) +'</p> </div> </div>';
                }
            }
        });
    })
}

itensCarrinho()