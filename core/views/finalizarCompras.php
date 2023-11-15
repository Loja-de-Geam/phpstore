<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <title>Finalização</title>
    <link rel="stylesheet" href="public_html\assets\css\style_final.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="public_html\assets\images\logo\favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
        <button value="0" onclick="formaPagamentoSwitch(this)" class="selected"v>Via Pix</button>
        <button value="1" onclick="formaPagamentoSwitch(this)">Via Cartão</button>
    </div>
                
                <div class="detalhes">
                    <div id="pix-details">
                        <h3>Utilize a câmera para escanear o QR Code</h3>
                        <!-- Inclua aqui o código ou imagem do QR Code para o Pix -->
                    </div>
                    <div id="card-details">
                        <form action="" class="form-cartao">
                            <label for="card-number">Número do Cartão</label>
                            <input type="text" id="card-number" placeholder="XXXX XXXX XXXX XXXX" required>
                            <label for="card-expiry">Banco</label>
                            <input type="text" id="card-expiry" placeholder="Nome do banco" required>
                            <label for="card-cvv">CVV</label>
                            <input type="text" id="card-cvv" placeholder="XXX" required>
                        </form>
                    </div>
                </div>
            </div>
            <div class="botao_f">
                <button id="payment-button" onclick="processPayment()">Finalizar</button>
                <p style="text-align: center;"><a href="./?a=menu">Voltar</a></p>
            </div>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $('#card-number').mask('0000 0000 0000 000');
            $('#card-cvv').mask('000', {
                reverse: true
            });
        
         window.onload = function() {
        formaPagamentoSwitch(document.querySelector('.formas button.selected'));
        };
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
