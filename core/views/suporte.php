<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
    <link rel="stylesheet" href="public_html\assets\css\suporte.css">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <div class="imagem">
                <h1>Bem-vindo(a) ao nosso Suporte técnico</h>
            <img src="public_html\assets\images\suporte.svg" alt="Bem-vindo ao suporte">
        </div>
        <div class="menu">
            <div class="conteudo">
                <h1>O que deseja fazer?</h1>
                <form action="" method="post">
                    <ul>
                        <li class="pergunta"><a href="./?a=comousar">1 - Como usar o site</a></li>
                        <li class="pergunta"><a href="./?a=reclamacao">2 - Reclamação do site</a></li>
                        <li class="pergunta"><a href="./?a=informarbug">3 - Informar bug ou erro do site</a></li>
                        <li class="pergunta"><a href="./?a=comousar">4 - Como funciona a forma de pagamento</a></li>
                        <li class="pergunta"><a href="./?a=outros">5 - Dúvidas</a></li>
                    </ul>
                    <p><a href="./">Voltar ao site</a></p>
                    <div class="problema">
                        <label for="Problema">Qual é o problema?</label>
                        <input type="number" name="problema" placeholder="Digite aqui aqui" min="1" max="5">
                    </div>
                    <button class="botao">Enviar</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>


<?php 
    if(!empty($_POST['problema'])){
        if($_POST['problema'] == 1) {
            header('Location: ./?a=comousar');
        }elseif($_POST['problema'] == 2) {
            header('Location: ./?a=reclamacao');
        }elseif($_POST['problema'] == 3) {
            header('Location: ./?a=informarbug');
        }elseif($_POST['problema'] == 4) {
            header('Location: ./?a=comousar');
        }elseif($_POST['problema'] == 5) {
            header('Location: ./?a=outros');
        }else{
            header('Location: ./?a=suporte');
        }
    }
?>