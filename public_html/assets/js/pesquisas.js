var pesquisa = document.querySelector('#pesquisar')
var autocomplete = document.querySelector('.auto-complete')

pesquisa.addEventListener('focusin', event => {
    autocomplete.style.display = 'block';
    if(autocomplete.textContent.length == 0 || event.target.value.length == 0) {
        autocomplete.innerHTML = 'Pesquise uma comida!'
    }
})

pesquisa.addEventListener('focusout', event => {
    autocomplete.style.display = 'none';
})

pesquisa.addEventListener('input', _.throttle(async event => {

    try {

        if(event.target.value.length === 0) {
            autocomplete.style.display = 'block';
            autocomplete.innerHTML = '<div id="notfound">Não achamos oque você queria:/</div>';
            return;
        }

        if (event.target.value.length > 1) {
            const { data } = await axios.get('./public_html/pesquisa.php', {
                params: {
                    pesquisa: event.target.value
                }
            })

            if (!data.length) {
                autocomplete.style.display = 'block';
                autocomplete.innerHTML = '<div id="notfound">Não achamos oque você queria:/</div>';
                return;
            }

            autocomplete.style.display = 'block';
            var menuFound = '<ul>';

            menuFound += data.map(pesquisa => {
                return `<li>${pesquisa.nome}</li>`;
            }).join('');

            menuFound += '</ul>';

            autocomplete.innerHTML = menuFound;
        }
    } catch (error) {
        console.log(error)
    }

}, 500))