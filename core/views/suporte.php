<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
    <link rel="stylesheet" href="..\public\assets\css\suporte.css">
</head>
<body>
    <main>
        <div class="imagem">
                <h1>Bem-vindo(a) ao nosso Suporte técnico</h>
            <img src="..\public\assets\images\suporte.svg" alt="Bem-vindo ao suporte">
        </div>
        <div class="menu">
            <div class="conteudo">
                <h1>O que deseja fazer?</h1>
                <form action="{{ url_for('suporte') }}" method="post">
                    <ul>
                        <li class="pergunta">1 -Como usar o site</li>
                        <li class="pergunta">2 - Reclamação do site</li>
                        <li class="pergunta">3 - Informar bug ou erro do site</li>
                        <li class="pergunta">4 - Como funciona a forma de pagamento</li>
                        <li class="pergunta">5 - Outro problema</li>
                    </ul>
                    <p><a href="/phpstore/public/">Voltar ao site</a></p>
                    <div class="problema">
                        <label for="Problema">Qual é o problema?</label>
                        <input type="number" name="problema" placeholder="Digite aqui">
                    </div>
                    <button class="botao">Enviar</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>