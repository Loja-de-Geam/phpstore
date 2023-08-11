function carrinho() {
    const carrinho = document.getElementById('janela-modal')
    carrinho.classList.add('abrir')

    carrinho.addEventListener('click', (e) => {
        if (e.target.id == 'janela-modal') {
            carrinho.classList.remove('abrir')
        }
    })
}