<?php
session_start(); // Rozpoczynamy sesję

// Sprawdzenie, czy użytkownik jest już zalogowany
if (isset($_SESSION['user'])) {
    header('Location: index.php'); // Jeśli już zalogowany, przekieruj na stronę główną
    exit();
}

// Obsługa formularza logowania
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nick = $_POST['nick'];
    $haslo = $_POST['haslo'];

    // Dane użytkownika zapisane w zmiennych PHP (na razie zamiast bazy danych)
    $mockUsers = [
        'admin' => 'admin123', // login => hasło
        'user' => 'user123',
    ];

    // Weryfikacja loginu i hasła
    if (array_key_exists($nick, $mockUsers) && $mockUsers[$nick] === $haslo) {
        $_SESSION['user'] = $nick; // Zapisanie użytkownika w sesji
        header('Location: index.php'); // Przekierowanie po zalogowaniu
        exit();
    } else {
        $error = "Niepoprawny login lub hasło!";
    }
}
?>
 
 <head>
    <title>Logowanie</title>
    <link rel="stylesheet" href="login_style.css">
 </head>

 <body>
    <?php include 'header.php'; ?>
    

    <div class="form-container">
        <h1>Zaloguj się</h1>
        <form method="POST" action="login.php">
            <div>
                <label for="nick">Nick:</label>
                <input type="text" name="nick" id="nick" required>
            </div>
            <div>
                <label for="haslo">Hasło:</label>
                <input type="password" name="haslo" id="haslo" required>
            </div>
            <?php if (!empty($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="przycisk">
                <button type="submit">Zaloguj</button>
            </div>
        </form>
    </div>

</body>