async function carregarMais(id=1) {
    await fetch('./../core/views/src/saibaMais.php?id='+id)
}