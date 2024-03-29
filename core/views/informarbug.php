<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>
    <link rel="stylesheet" href="..\public\assets\css\suporte.css">
    <link rel="shortcut icon" href="assets\images\logo\favicon.ico" type="image/x-icon">
    <style>@charset "UTF-8";

      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;600&display=swap');
      
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
      body{
          margin: 0;
          padding: 0;
          font-family: 'Noto Sans', sans-serif;
      }
      main{
          width: 100vw;
          height: 100vh;
          background-image: linear-gradient(to bottom, #002366, #004080);;
          display: flex;
          justify-content: center;
          align-items: center;
      }
      .imagem{
          width: 50vw;
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
      }
      .imagem > h1{
          font-size: 2vw;
          color: #fff;
      }
      .imagem > img{
          width: 35vw;
      }
      .menu{
          width: 50vw;
          height: 90%;
          display: flex;
          justify-content: center;
          align-items: center;
      }
      .conteudo{
          width: 80%;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
          padding: 20px 25px;
          background: var(--cor_menu);
          border-radius: 17px;
          box-shadow: var(--padrao);
      }
      .conteudo > h1{
          color: #001F3F;
          margin: 0px 0px 30px 0px;
      }
      .problema{
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0.3rem 0;
      }
      .caixa {
    display: flex;
    flex-direction: column;
    margin-bottom: 1.1rem;
    width: 45%;
        }
      .caixa > input,textarea,select{
        margin: 0.6rem 0;
        padding: 0.8rem 1.2rem;
        border: none;
        border-radius: 10px;
        box-shadow: 1px 1px 6px #0000005d;
        font-size: 0.8rem;
      }
      select {
        appearance: none;
      }
        .caixa > input:hover, select:hover {
    background-color: #eeeeee75;
        }

        .caixa input:focus-visible, textarea:focus-visible,select:focus-visible {
            outline: 1px solid #9B59B6;
        }

        .caixa label{
            font-weight: bolder;
            color: #000000;
        }

        .caixa input::placeholder {
            color: #000000be;
        }

      .botao, .voltar {
          width: 100%;
          padding: 10px 0px;
          margin-top: 15px;
          border: none;
          border-radius: 20px;
          outline: none;
          font-weight: bold;
          letter-spacing: 1px;
          color: #fff;
          background: #800080;
          box-shadow: 0px 10px 40px -12px var(--sombra_colorida);
          
      }
      .voltar {
        width: 30%;
        background: #002366;
      }
      
      .botao:hover, .voltar:hover {
          cursor: pointer;
          border: 1px solid #9B59B6;
          background-color: #fff;
          color: #800080;
          padding: 9px 0px;
      }
      .voltar:hover {
        border: 1px solid #001F3F;
        background-color: #fff;
        color: #002366;
    }

    #descricaobug {
        resize: none;
    }

      
      @media only screen and (max-width: 950px){
          .conteudo{
              width: 85%;
          }
      }
      @media only screen and (max-width: 600px){
          main{
              flex-direction: column;
          }
          .imagem > h1{
              display: none;
          }
          .menu{
              width: 100%;
              height: auto;
          }
          .imagem{
              width: 100%;
              height: auto;
          }
          .imagem-image{
              width: 50vw;
          }
      }
    </style>
</head>
<body>
    <main>
        <div class="imagem">
                <h1>Bem-vindo(a) ao nosso Suporte técnico</h1>
            <img src="public_html/assets/images/suporte.svg" alt="Bem-vindo ao suporte">
        </div>
        <div class="menu">
            <div class="conteudo">
                <h1>Relatos de problemas</h1>
                <form class="problema" action="" method="POST">
                    <div class="caixa">
                        <label for="nomebug">Título do problema</label>
                        <input type="text" id="nomebug" name="nomebug" required><br>
                    </div>

                    <div class="caixa">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" name="categoria">
                            <option value="" disabled selected hidden>Selecione uma opção</option>
                            <option value="design">Design</option>
                            <option value="funcionalidade">Funcionalidade</option>
                            <option value="desempenho">Desempenho</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
            
                    
            
                    <div class="caixa">
                        <label for="descricao">Descrição do problema</label>
                        <textarea id="descricaobug" name="descricaobug" rows="4" required></textarea><br>
                    </div>

                    <div class="caixa">
                        <label for="gravidade">Gravidade</label>
                        <select id="gravidade" name="gravidade">
                        <option value="" disabled selected hidden>Selecione uma opção</option>
                            <option value="baixa">Baixa</option>
                            <option value="media">Média</option>
                            <option value="alta">Alta</option>
                            <option value="critica">Crítica</option>
                        </select>
                        
                    </div>
                    
                    <div class="caixa">
                        <label for="anexo">Anexar Captura de tela</label>
                        <input type="file" id="anexo" name="anexo" accept="image/*">
                    </div>
                    <button class="botao" name="envio">Enviar relato</button>
                    <button class="voltar" onclick="window.location.href='./?a=suporte'">Voltar</button>
                </form>
            </div>
        </div>
    </main>
 
</body>
</html>

<?php


use core\classes\DataBase;
if(isset($_POST['envio'])) {
    $data = new DataBase();
    $data->addInfoBug($_POST['nome'], $_POST['categoria'], $_POST['descricaobug']);
}
?>