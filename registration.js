document.querySelector('form').addEventListener('submit', function(event) {
    const nick = document.querySelector('input[name="nick"]');
    const haslo = document.querySelector('input[name="haslo"]');
    const mail = document.querySelector('input[name="mail"]');
    let isValid = true;

    // Resetujemy błędy
    document.querySelectorAll('.error').forEach(el => el.remove());
    nick.classList.remove('invalid');
    haslo.classList.remove('invalid');
    mail.classList.remove('invalid');

    // Walidacja nicka
    if (!nick.value.trim()) {
        isValid = false;
        nick.classList.add('invalid');
        showError(nick, 'Nick jest wymagany.');
    }

    // Walidacja hasła
    if (!haslo.value.trim()) {
        isValid = false;
        haslo.classList.add('invalid');
        showError(haslo, 'Hasło jest wymagane.');
    }

    // Walidacja maila
    if (!mail.value.trim() || !/\S+@\S+\.\S+/.test(mail.value)) {
        isValid = false;
        mail.classList.add('invalid');
        showError(mail, 'Podaj poprawny adres e-mail.');
    }

    if (!isValid) {
        event.preventDefault(); // Anulowanie wysyłania formularza
    }
});

// Funkcja dodająca komunikat błędu
function showError(input, message) {
    const error = document.createElement('p');
    error.classList.add('error');
    error.textContent = message;
    input.parentElement.appendChild(error);
}