<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prendi i dati dal modulo
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email del destinatario (la tua email)
    $to = "giorgio.gagliandi@gmail.com";

    // Oggetto dell'email
    $subject = "Nuovo messaggio dal sito Winner Wines";

    // Corpo dell'email
    $body = "Nome: $name\n";
    $body .= "Email: $email\n";
    $body .= "Messaggio:\n$message\n";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Invia l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Messaggio inviato con successo! Ti risponderemo al più presto.</p>";
    } else {
        echo "<p>Errore nell'invio del messaggio. Riprova più tardi.</p>";
    }
}
?>
