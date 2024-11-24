<?php include 'header.php';?>
<head>
    <title>Kontakt</title>
    <link rel="stylesheet" href="style_contact.css">
</head>   
<body>

        <div class="kontakt">
            <h1>Kontakt</h1>
        </div>

        <div class="kontakt2">
            <div class="info">
                <h1>Skontaktuj się z nami!</h1>
                    <div class="paragrafy">
                        <p id="p1">Zadzwoń</p>
                        <h4>Infolinia</h4>
                        <p >kontakt@cylindersi.pl</p>
                        <p id="p2">+48 531 002 001</p>
                        <p>Infolinia czynna 24h/7. Godziny pracy biura:</p>
                        <p id="p2">Poniedziałek – Piątek 8:00 – 21:00.</p>
                        <h1>Adres wypożyczalni Warszawa</h1>
                        <p id="p3">Towarowa 33</p>
                        <p>00-869 Warszawa</p>
                    </div>  
            </div>
            <div class="formularz">
                <h1>Skontaktuj się z nami</h1>
                <form id="contactForm">
                    <p class="label">Twój adres e-mail:</p>
                    <input type="text" class="input" name="email" placeholder="Wpisz e-mail">
                    <p class="label">Twój numer telefonu:</p>
                    <input type="text" class="input" name="phone" placeholder="Wpisz nr. tel.">
                    <p class="label">Treść wiadomości:</p>
                    <textarea class="input1" name="message" placeholder="Napisz wiadomość"></textarea>
                    <button type="submit" class="Przycisk">Wyślij</button>
                </form>
                <div id="confirmationMessage" class="success-message" style="display: none;">
                <p>Twoja wiadomość została wysłana!</p>   
                </div>
            </div>
        </div>
        <script src="message.js"></script>
    </body> 
</html>
