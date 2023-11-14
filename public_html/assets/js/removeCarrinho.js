function removeCarrinho(id) {
    $(function(e) {
        var id_item = id
        $.ajax({
            url: './public_html/removeCarrinho.php',
            method: 'POST',
            data: {id: id_item},
            dataType: 'json'
        }).done(function(result) {
            itensCarrinho()
            console.log(result)
        })
    })
}