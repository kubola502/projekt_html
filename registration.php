<?php include 'header.php' ;?>
<head>
    <title>Rejestracja</title>
    <link rel= "stylesheet" href="registration.css">
</head>
<body>

<?php
session_start(); // Rozpoczynamy sesję

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nick = $_POST['nick'];
    $haslo = $_POST['haslo'];
    $mail = $_POST['mail'];

    // Przykładowa walidacja
    if (empty($nick) || empty($haslo) || empty($mail)) {
        $error = "Wszystkie pola są wymagane.";
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $error = "Niepoprawny adres e-mail.";
    } else {
        // Zapisujemy dane do sesji (zamiast bazy danych na razie)
        $_SESSION['user'] = $nick;
        header('Location: index.php'); // Po pomyślnej rejestracji, przekierowanie
        exit();
    }
}
?>


    <div class="pole">
        <div class="prostokat"> 
            <div class="form-container">
            <form method="POST" action="registration.php" >
                <label for="nick">Nick:</label>
                <input type="text" name="nick"id="nick" required>
                <label for="haslo" >Hasło:</label>
                <input type="password" name="haslo"id="haslo" required>
                <label for="mail">Mail:</label>
                <input type="email" name="mail"id="mail" required>
            
                <div class="przycisk">
                    <button class="przycisk" type="button">Zarejestruj</button>
                </div> 
        </div>
            <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
        </form>

    </div>
    
    <script src="registration.js"></script>
</body>
</html>