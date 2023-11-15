function itensCarrinho() {
    $(function (e) {
        try {
            var email_u = document.querySelector('.email_u').value;
        } catch (error) {
            var email_u = '';
        }
        var itensCarrinho = document.querySelector('.itens-carrinho');
        var valorTotal = document.querySelector('.total');
        var miniPreco = document.querySelector('.span-carrinho-preco');
        var miniQuant = document.querySelector('.span-carrinho-quantidade');
        var valorFinal = 0;
        var quantidade = 0;
        $.ajax({
            url: './public_html/itensCarrinho.php',
            method: 'POST',
            data: { email: email_u },
            dataType: 'json'
        }).done(function (result) {
            if (result[0] == true) {
                if (result.length > 1) {
                    itensCarrinho.innerHTML = ""
                    valorFinal = 0
                    quantidade = 0
                    for (let i = 1; i < result.length; i++) {
                        const element = result[i];
                        itensCarrinho.innerHTML += '<div class="prod-carrinho"> <abbr title="Remover do Carrinho"> <button class="btn-remove" onclick="removeCarrinho(' + element['ped_id'] + ')"> <i class="bi bi-trash-fill"></i> </button> </abbr> <div class="aparencia-prod"> <img src="public_html\\assets\\images\\comidas\\' + element['img'] + '" alt="' + element['nome'] + '" class="img-prod-car"> <h3 class="nome-prod">' + element['nome'] + '</h3> </div><div class="desc-prod"><p class="desc-car">' + element['descricao_saiba_mais'] + '</p> <p class="preco">R$' + element['preco'].toFixed(2) + '</p> </div> </div>';
                        valorFinal += element['preco']
                        quantidade += 1
                    }
                    valorTotal.innerHTML = 'Total a pagar: R$' + valorFinal.toFixed(2)
                    miniPreco.innerHTML = 'R$' + valorFinal.toFixed(2)
                    if (quantidade == 1) {
                        miniQuant.innerHTML = quantidade + ' item'
                    } else {
                        miniQuant.innerHTML = quantidade + ' itens'
                    }
                } else {
                    itensCarrinho.innerHTML = ""
                    itensCarrinho.innerHTML += '<div class="sem-itens"><h3>Adicione itens ao carrinho</h3></div>'
                }
            } else {
                itensCarrinho.innerHTML = ""
                itensCarrinho.innerHTML += '<div class="sem-itens"><h3>Adicione itens ao carrinho</h3></div>'
            }
        });
    })
}

itensCarrinho()