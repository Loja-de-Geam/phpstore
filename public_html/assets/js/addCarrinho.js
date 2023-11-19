$('.btn-add-car').click(function(e) {
    e.preventDefault();
    var id_com = this.value;
    var email_u = document.querySelector('#email_u').value;
    const saibaMais = document.getElementById('saiba-mais');

    $.ajax({
        url: './public_html/addCarrinho.php',
        method: 'POST',
        data: {id: id_com, email: email_u},
        dataType: 'json'
    }).done(function(result) {
        alert('Item adicionado')
        itensCarrinho()
        saibaMais.classList.remove('abrir')
    });
})