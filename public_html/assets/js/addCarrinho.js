async function addCarrinho(id) {
    const dados = await fetch('./public_html/addCarrinho.php?id=' + id);
    const resposta = dados.json();
    console.log(resposta);
}