function saibaMais() {
    const form = document.getElementById('form-saibaMais')
    form.addEventListener('submit', async (ev) => {
        ev.preventDefault()

        const formData = new FormData(form)
        const dados = Object.fromEntries(formData)
        console.log(data)
        const envio = await fetch('./', {
            method: 'POST',
            mode: 'cors',
            body: dados,

        })
    })
    const saibaMais = document.getElementById('saiba-mais')
    saibaMais.classList.add('abrir')

    saibaMais.addEventListener('click', (e) => {
        if (e.target.id == 'saiba-mais') {
            saibaMais.classList.remove('abrir')
        }
    });
}