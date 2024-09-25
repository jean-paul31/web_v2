<?php
ini_set('SMTP', 'smtp-relay.gmail.com');
ini_set('smtp_port', 25);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Valider les champs (optionnel)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email invalide.";
        exit;
    }

    // Contenu de l'email
    $to = "contact@jean-pauldev.fr";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $fullMessage = "Nom: $name\n\nEmail: $email\n\nSujet: $subject\n\nMessage:\n$message";

    // Envoyer l'email
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Merci $name, votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer plus tard.";
    }
}
?>
