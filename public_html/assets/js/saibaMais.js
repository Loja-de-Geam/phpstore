function saibaMais() {
    const saibaMais = document.getElementById('saiba-mais');
    saibaMais.classList.add('abrir');

    saibaMais.addEventListener('click', (e) => {
        if (e.target.id == 'saiba-mais') {
            saibaMais.classList.remove('abrir');
        }
    });
}