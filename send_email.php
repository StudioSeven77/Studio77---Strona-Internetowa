<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobieranie danych z formularza
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $body = htmlspecialchars($_POST['body']);

    // Adres e-mail, na który chcesz wysłać wiadomość
    $to = "contact.studio77@proton.me"; // Zmień to na swój adres e-mail

    // Temat wiadomości
    $email_subject = "Nowa wiadomość od: $name";

    // Treść wiadomości
    $email_body = "Imię: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Temat: $subject\n";
    $email_body .= "Wiadomość:\n$body\n";

    // Nagłówki wiadomości
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Wysyłanie wiadomości
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Wystąpił problem z wysłaniem wiadomości.";
    }
} else {
    echo "Niepoprawna metoda żądania.";
}
?>
