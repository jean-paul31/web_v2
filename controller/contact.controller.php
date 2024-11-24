<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Valider les champs
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Tous les champs sont requis.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email invalide.";
        exit;
    }

    // Empêcher l'injection d'en-têtes
    if (preg_match("/[\r\n]/", $email) || preg_match("/[\r\n]/", $name)) {
        echo "Caractères non autorisés détectés.";
        exit;
    }

    // Contenu de l'email
    $to = "contact@jean-pauldev.fr";
    $headers = "From: noreply@jean-pauldev.fr\r\n";  // Utiliser un email du domaine
    $headers .= "Reply-To: $email\r\n";
    $fullMessage = "Nom: $name\n\nEmail: $email\n\nSujet: $subject\n\nMessage:\n$message";

    // Envoyer l'email
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Merci $name, votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer plus tard.";
    }
}
