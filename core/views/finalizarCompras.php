<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @charset "UTF-8";

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #001F3F;
        }

        .container {
            width: 85%;
            height: 85vh;
            display: flex;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.308);
        }

        .form-img {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            background-image: linear-gradient(to bottom, #002366, #004080);
            border-radius: 7px 0px 0px 7px;
        }

        .form-img img {
            width: 31rem;
        }

        .finalizar {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #FFFFFF;
            padding: 3rem;
            border-radius: 0px 7px 7px 0px;
        }

        .cabeca {
            margin-bottom: 1.5em;
            display: flex;
            justify-content: space-between;
            height: 10%;
            
        }

        .cabeca h1 {
            color: #09072e;
        }

        .cabeca h1::after {
            content: '';
            display: block;
            width: 16rem;
            height: 0.3rem;
            background-color: #9B59B6;
            margin: 0 auto;
            position: absolute;
            border-radius: 10px;
        }

        .forma_pagamento {
            width: 100%;
            flex-direction: column;
            height: 80%;
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #pix-details, #card-details {
            width: 100%;
            display: none;
            margin-top: 20px;
        }
        .botao_f {
            width: 100%;
            height: 10%;
            
        }
        #payment-button {
            width: 100%;
            margin-top: 2.5rem;
            border: none;
            background-color: #800080;
            padding: 0.62rem;
            border-radius: 20px;
            cursor: pointer;
            color: #fff;
            font-size: 0.93rem;
            font-weight: bolder;
            transition: all .5s ease;
        }

        #payment-button:hover {
            color: #800080;
            background-color: #fff;
            border: 1px solid #9B59B6;
            padding: 0.56rem;
        }
        .formas {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 10%;
            margin-bottom: 20px;
        }
        .formas button {
            color: #fff;
            background-color: #800080;
            border: none;
            padding: 0.62rem;
            border-radius: 20px;
            margin: 0px 10px;
            cursor: pointer;
            font-size: 0.93rem;
            font-weight: bolder;
            transition: all .5s ease;
        }
        .formas button:hover {
            font-size: 1.3rem;
            background-color: #fff;
            color: #800080;
            border: 2px solid #9B59B6;
            padding: 0.56rem;
        }


        .selected {
            background-color: #4CAF50;
            color: #fff;
        }

        .detalhes{
            width: 100%;
            height: 80%;
        }

        .formas button.selected {
    background-color: #fff;
    color: #800080;
    border: 2px solid #9B59B6;
    padding: 0.56rem;
}

    </style>
</head>
<body>

<div class="container">
    <div class="form-img">
        <img src="public_html\assets\images\cadastro.svg" alt="">
    </div>
    <div class="finalizar">
        <div class="cabeca">
            <div class="titulo">
                <h1>Finalizar compra</h1>
            </div>
        </div>
        <div class="forma_pagamento">
        <div class="formas">
    <button value="0" onclick="formaPagamentoSwitch(this)">Via Pix</button>
    <button value="1" onclick="formaPagamentoSwitch(this)">Via Cartão</button>
</div>
            
            <div class="detalhes">
                <div id="pix-details">
                    <!-- Detalhes do pagamento com Pix -->
                    <p>Utilize a câmera para escanear o QR Code</p>
                    <!-- Inclua aqui o código ou imagem do QR Code para o Pix -->
                </div>
                <div id="card-details">
                    <!-- Detalhes do pagamento com Cartão -->
                    <label for="card-number">Número do Cartão:</label>
                    <input type="text" id="card-number" placeholder="XXXX XXXX XXXX XXXX" required>
                    <label for="card-expiry">Data de Expiração:</label>
                    <input type="text" id="card-expiry" placeholder="MM/AA" required>
                    <label for="card-cvv">CVV:</label>
                    <input type="text" id="card-cvv" placeholder="XXX" required>
                </div>
            </div>
        </div>
        <div class="botao_f"><button id="payment-button" onclick="processPayment()">Finalizar</button></div>
    </div>
</div>

<script>
    function formaPagamentoSwitch(button) {
        const buttons = document.querySelectorAll('.formas button');
        buttons.forEach(btn => btn.classList.remove('selected'));

        button.classList.add('selected');

        if (button.value === "0") {
            togglePayment('pix');
        } else {
            togglePayment('card');
        }
    }

    function togglePayment(option) {
        const pixDetails = document.getElementById('pix-details');
        const cardDetails = document.getElementById('card-details');

        if (option === 'pix') {
            pixDetails.style.display = 'block';
            cardDetails.style.display = 'none';
        } else if (option === 'card') {
            pixDetails.style.display = 'none';
            cardDetails.style.display = 'block';
        }
    }

    function processPayment() {
        alert('Pagamento processado com sucesso!');
    }

</script>

</body>
</html>
