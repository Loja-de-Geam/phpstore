async function saibaMais(id=1) {
    const dados = await fetch('./public_html/saiba_mais.php?id=' + id);
    const resposta = await dados.json();
    console.log(resposta);
    document.getElementById('imagem-saiba-mais').src = 'public_html\\assets\\images\\comidas\\' + resposta[0]['img'];
    document.getElementById('imagem-saiba-mais').alt = resposta[0]['nome'];
    document.getElementById('nome-produto-saiba-mais').innerText = resposta[0]['nome'];
    document.getElementById('descricao-produto-saiba-mais').innerText = resposta[0]['descricao'];
    document.getElementById('preco-produto-saiba-mais').innerText = 'R$' + resposta[0]['preco'];

    const saibaMais = document.getElementById('saiba-mais')
    saibaMais.classList.add('abrir')

    saibaMais.addEventListener('click', (e) => {
        if (e.target.id == 'saiba-mais') {
            saibaMais.classList.remove('abrir')
        }
    });
}