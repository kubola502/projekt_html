<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="foto/car.ico" type="image/x-icon">
    
</head>
<body>

<header>
    <nav>
        <img src="foto/logo1.svg" class="logo" alt="Logo">
        <a href="about_us.php">O nas</a>
        <a href="contact.php">Kontakt</a>
        <a href="offer.php">Oferta</a>
        <a href="index.php">Strona Główna</a>

        <?php if (isset($_SESSION['user'])): ?>
           
            <li>Witaj, <?php echo htmlspecialchars($_SESSION['user']); ?>!</li>
            <li><a href="logout.php">Wyloguj się</a></li>
        <?php else: ?>
            
            <li><a href="registration.php">Zarejestruj się</a></li>
            <li><a href="login.php">Zaloguj się</a></li>
        <?php endif; ?>
        
    </nav>
   
</header>
</body>
</html>
