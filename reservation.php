<?php
// Sprawdzamy, czy został przekazany parametr "car" w URL
$car = isset($_GET['car']) ? $_GET['car'] : '';
?>

<?php include 'header.php'; ?>
<head>
    
    <title>Rezerwacja - Samochód</title>
    <link rel="stylesheet" href="reservation_style.css">
</head>
<body>
   

    <div class="reservation-container">
        <h1>Rezerwacja samochodu: <?php echo ucfirst($car); ?></h1>

        <!-- Formularz rezerwacji -->
        <form method="POST" action="summary.php">
            <div class="form-group">
                <label for="name">Imię i Nazwisko:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">Adres e-mail:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Numer telefonu:</label>
                <input type="text" name="phone" id="phone" required>
            </div>

            <div class="form-group">
                <label for="payment">Dane do płatności (numer karty):</label>
                <input type="text" name="payment" id="payment" required>
            </div>

            <div class="form-group">
                <button type="submit" class="reserve-button">Potwierdź rezerwację</button>
            </div>

            <input type="hidden" name="car" value="<?php echo $car; ?>"> <!-- Przesyłamy nazwę samochodu do potwierdzenia -->
        </form>
    </div>

    
</body>
</html>
