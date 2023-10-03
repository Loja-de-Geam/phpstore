function filtro() {
    const filtro = document.getElementById('filtro-janela')
    filtro.classList.add('abrir')

    filtro.addEventListener('click', (e) => {
        if (e.target.id == 'filtro-janela') {
            filtro.classList.remove('abrir')
        }
    })
}