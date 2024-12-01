<?php
 session_start();
 

// Obsługa formularza rejestracji
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nick = $_POST['nick'];
    $haslo = $_POST['haslo'];
    $mail = $_POST['mail'];

    // Walidacja danych
    $errors = [];
    if (empty($nick)) {
        $errors['nick'] = "Nick jest wymagany.";
    }
    if (empty($haslo)) {
        $errors['haslo'] = "Hasło jest wymagane.";
    }
    if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = "Podaj poprawny adres e-mail.";
    }

    // Jeśli nie ma błędów, zapisujemy dane użytkownika w sesji
    if (empty($errors)) {
        $_SESSION['user'] = $nick;
        header('Location: index.php'); // Przekierowanie po pomyślnej rejestracji
        exit();
    }
}
?>



<?php include 'header.php' ;?>
<head>
    <title>Rejestracja</title>
    <link rel= "stylesheet" href="registration.css">
</head>
<body>

<div class="pole">
        <div class="prostokat"> 
            <div class="form-container">
                <form method="POST" action="registration.php" id="registrationForm">
                    <div>
                        <label for="nick">Nick:</label>
                        <input type="text" name="nick" id="nick" value="<?php echo htmlspecialchars($_POST['nick'] ?? ''); ?>">
                        <?php if (!empty($errors['nick'])): ?>
                            <p class="error"><?php echo $errors['nick']; ?></p>
                        <?php endif; ?>
                    </div>
                    
                    <div>
                        <label for="haslo">Hasło:</label>
                        <input type="password" name="haslo" id="haslo">
                        <?php if (!empty($errors['haslo'])): ?>
                            <p class="error"><?php echo $errors['haslo']; ?></p>
                        <?php endif; ?>
                    </div>
                    
                    <div>
                        <label for="mail">Mail:</label>
                        <input type="email" name="mail" id="mail" value="<?php echo htmlspecialchars($_POST['mail'] ?? ''); ?>">
                        <?php if (!empty($errors['mail'])): ?>
                            <p class="error"><?php echo $errors['mail']; ?></p>
                        <?php endif; ?>
                    </div>
                    
                    <div class="przycisk">
                        <button type="submit" class="przycisk">Zarejestruj</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>