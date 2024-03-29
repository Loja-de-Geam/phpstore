<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como usar o site</title>
    <link rel="stylesheet" href="..\public\assets\css\suporte.css">
    <link rel="shortcut icon" href="assets\images\logo\favicon.ico" type="image/x-icon">
    <style>
      /*
Azul Muito Escuro: #001F3F
Azul Escuro Profundo: #002366
Azul Médio: #3498DB
Roxo Intenso: #800080
Roxo Profundo: #663399
Roxo Claro: #9B59B6
Azul Claro: #5E9DC8
*/
        :root{
            --cor_fundo1: #0000ce;
            --cor_fundo2: #000041;
            --cor_texto: #09072e;
            --cor_menu: #fff;
            --cor_texto_2: #1d134b;
            --cor_botao: #1d134b;
            --cor_botao_fundo: #423acf;
            --sombra_colorida: #6963e7;
            --padrao: 0px 8px 40px #00000046;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Noto Sans', sans-serif;
        }
        main {
            background-image: linear-gradient(to bottom, #002366, #004080);
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    
        .menu {
            
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    
        .conteudo {
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px 25px;
            background: var(--cor_menu);
            border-radius: 17px;
            box-shadow: var(--padrao);
        }
    
        .conteudo>h1 {
            color: #001F3F;
            margin: 0px 0px 30px 0px;
        }
    
        .conteudo>h1::after {
            content: '';
            display: block;
            width: 24rem;
            height: 0.4rem;
            background: linear-gradient(to right, #800080, #3498DB);
            margin: 2px auto 0px auto;
            position: absolute;
            border-radius: 10px;
        }
        .conteudo p{
            font-size: 1.1rem;
            text-indent: 30px; 
            text-align: justify;
            margin: 0 0 1rem;
        }
    
        .conteudo ul {
            margin-bottom: 30px;
        }
    
        .pergunta {
            color: var(--cor_texto_2);
            font-size: 1.1rem;
        }
    
        a {
            color: #0000ce;
            text-decoration: none;
            transition: .30s;
        }
    
        a:hover {
            color: var(--cor_botao_fundo);
            font-weight: bold;
        }
    
        .problema {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }
    
        .problema>input {
            width: 100%;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-size: 13pt;
            outline: none;
            box-sizing: border-box;
            box-shadow: 1px 1px 6px #00000069;
        }
    
        .problema>input::placeholder {
            color: #000000be;
        }
    
        .problema>input:focus-visible {
            outline: 1px solid #6c63ff;
        }
    
        .problema>label {
            color: var(--cor_texto_2);
            margin-bottom: 10px;
            font-weight: bolder;
        }
    
        .botao {
            width: 100%;
            padding: 10px 0px;
            margin-top: 15px;
            border: none;
            border-radius: 20px;
            outline: none;
            font-weight: bold;
            letter-spacing: 1px;
            color: #fff;
            background: #663399;
            box-shadow: 0px 10px 40px -12px var(--sombra_colorida);
        }
    
        .botao:hover {
            cursor: pointer;
            border: 1px solid #800080;
            background-color:#fff;
            color: #800080;
            padding: 9px 0px;
        }
    
        @media only screen and (max-width: 950px) {
            .conteudo {
                width: 85%;
            }
        }
    
        @media only screen and (max-width: 600px) {
            main {
                flex-direction: column;
            }
    
            .imagem>h1 {
                display: none;
            }
    
            .menu {
                width: 100%;
                height: auto;
            }
    
            .imagem {
                width: 100%;
                height: auto;
            }
    
            .imagem-image {
                width: 50vw;
            }
        }
    </style>    
</head>

<body>
    <main>
        <div class="menu">
            <div class="conteudo">
                <h1>Instruções de uso do site</h1>
                <p>Inicialmente, crie sua conta fazendo o cadastro com as seguintes informações obrigatórias: primeiro nome, número de celular, endereço de e-mail válido e número de CPF.</p>
                <p> Após inserir seus dados pessoais, escolha uma senha segura que contenha pelo menos oito caracteres, combinando letras maiúsculas, minúsculas e números. É importante que você se lembre dessa senha para acessar sua conta posteriormente.
                   confirme a senha digitando-a novamente para garantir que não haja erros de digitação.</p>
                  <p>  Em seguida, escolha o gênero com o qual se identifica melhor. Temos as opções de masculino, feminino, prefiro não dizer e também a opção 'outro', caso nenhuma das opções anteriores seja a que melhor represente você.
                    Valorizamos a diversidade e respeitamos a identidade de gênero de todos os nossos usuários. Portanto, sinta-se à vontade para selecionar a opção que melhor reflete quem você é.
                </p>
                <p>
                    Após concluir o cadastro, você terá acesso a todos os recursos e benefícios disponíveis em nossa plataforma. Bem-vindo à nossa comunidade! Estamos felizes em tê-lo 
                    conosco e esperamos que tenha uma ótima experiência conosco!
                </p>
                <button class="botao" onclick="window.location.href='./?a=suporte'">Voltar</button>
            </div>
        </div>
    </main>
</body>

</html>