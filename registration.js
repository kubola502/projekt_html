document.querySelector('form').addEventListener('submit', function(event) {
    const nick = document.querySelector('input[name="nick"]').value;
    const haslo = document.querySelector('input[name="haslo"]').value;
    const mail = document.querySelector('input[name="mail"]').value;

    // Walidacja pól formularza
    if (!nick || !haslo || !mail) {
        alert('Wszystkie pola są wymagane!');
        event.preventDefault(); // Anulowanie wysyłania formularza
    } else if (!/\S+@\S+\.\S+/.test(mail)) {
        alert('Wprowadź poprawny adres e-mail!');
        event.preventDefault();
    }
});
