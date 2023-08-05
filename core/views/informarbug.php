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
          background-color: #EDE9D8;
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
          color: #423acf;
      }
      .imagem > img{
          width: 35vw;
      }
      .menu{
          width: 50vw;
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
      }
      .conteudo{
          width: 60%;
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
          color: #09072e;
          margin: 0px 0px 30px 0px;
      }
      .conteudo > h1::after {
              content: '';
              display: block;
              width: 12rem;
              height: 0.4rem;
              background-color: #4f48cc;
              margin: 2px auto 0px auto;
              position: absolute;
              border-radius: 10px;
      }
      .conteudo ul {
          margin-bottom: 30px;
      }
      .pergunta{
          color: var(--cor_texto_2);
          font-size: 1.1rem;
      }
      a{
          color: #0000ce;
          text-decoration: none;
          transition: .30s;
      }
      a:hover{
          color: var(--cor_botao_fundo);
          font-weight: bold;
      }
      .problema{
          width: 100%;
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          justify-content: center;
      }
      .problema > input{
          width: 100%;
          border: none;
          border-radius: 10px;
          padding: 12px;
          font-size: 13pt;
          outline: none;
          box-sizing: border-box;
          box-shadow: 1px 1px 6px #00000069;
      }
      .problema > input::placeholder{
          color: #000000be;
      }
      .problema > input:focus-visible {
          outline: 1px solid #6c63ff;
      }
      .problema > label{
          color: var(--cor_texto_2);
          margin-bottom: 10px;
          font-weight: bolder;
      }
      .botao{
          width: 100%;
          padding: 10px 0px;
          margin-top: 15px;
          border: none;
          border-radius: 20px;
          outline: none;
          font-weight: bold;
          letter-spacing: 2px;
          color: white;
          background: var(--cor_botao_fundo);
          box-shadow: 0px 10px 40px -12px var(--sombra_colorida);
      }
      .botao:hover {
          cursor: pointer;
          border: 1px solid var(--cor_botao_fundo);
          background-color: white;
          color: #423acf;
          padding: 9px 0px;
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
                <h1>RELATO DE BUGS</h1>
                <div class="problema">
                    <label for="nomebug">Titulo do bug:</label> 
                    <input type="text" id="nomebug" name="nomebug" required><br>

                    <label for="categoria">Categoria:</label>
                    <select id="categoria" name="categoria">
                        <option value="design">Design</option>
                        <option value="funcionalidade">Funcionalidade</option>
                        <option value="desempenho">Desempenho</option>
                        <option value="outro">Outro</option>
                    </select> <br>
            
                    <label for="gravidade">Gravidade:</label>
                    <select id="gravidade" name="gravidade">
                        <option value="baixa">Baixa</option>
                        <option value="media">Média</option>
                        <option value="alta">Alta</option>
                        <option value="critica">Crítica</option>
                    </select> <br>
                    
            
                    
                    <div class="problema">
                        <label for="descricao">Descrição do bug:</label>
                        <textarea id="descricaobug" name="descricaobug" rows="4" required></textarea><br>
                    </div>
                    <label for="anexo">Anexar Captura de tela:</label>
                    <input type="file" id="anexo" name="anexo" accept="image/*">
                    <button class="botao">Enviar relato</button>
                </form>
            </div>
        </div>
    </main>
 
</body>
</html>