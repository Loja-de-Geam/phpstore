function itensCarrinho() {
    $(function(e) {
        var email_u = document.querySelector('.email_u').value;
        $.ajax({
            url: './public_html/itensCarrinho.php',
            method: 'POST',
            data: {email: email_u},
            dataType: 'json'
        }).done(function(result) {
            if(result[0] == true) {
                for (let i = 1; i < result.length; i++) {
                    const element = result[i];
                    console.log('oi')
                }
            }
        });
    })
}

itensCarrinho()