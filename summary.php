<?php
// Odbieramy dane z formularza rezerwacji
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$payment = $_POST['payment'];
$car = $_POST['car'];
?>
 <?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
  
    <title>Potwierdzenie Rezerwacji</title>
    <link rel="stylesheet" href="summary_style.css">
</head>
<body>
    

    <div class="confirmation-container">
        <h1>Potwierdzenie Rezerwacji</h1>
        <p>Dziękujemy za dokonanie rezerwacji. Oto szczegóły Twojej rezerwacji:</p>

        <div class="confirmation-details">
            <p><strong>Samochód:</strong> <?php echo ucfirst($car); ?></p>
            <p><strong>Imię i Nazwisko:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Telefon:</strong> <?php echo $phone; ?></p>
            <p><strong>Dane do płatności:</strong> <?php echo $payment; ?></p>
        </div>

        <p>Twoja rezerwacja została pomyślnie przyjęta. Otrzymasz potwierdzenie na adres e-mail.</p>
    </div>

   
</body>
</html>
