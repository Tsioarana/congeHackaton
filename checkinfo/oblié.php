<?php
session_start();
include(".include/connect.php");

if (isset($_POST['submit'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : NULL;

    // Vérifier si l'utilisateur existe dans la base de données
    $query = mysqli_query($connect, "SELECT * FROM employe WHERE prenom = '$username'");
    $rows = mysqli_num_rows($query);

    if ($rows > 0) {
        // Générer un nouveau mot de passe aléatoire
        $newPassword = generateRandomPassword();

        // Mettre à jour le mot de passe dans la base de données
        $updateQuery = mysqli_query($connect, "UPDATE employe SET matricule = '$newPassword' WHERE prenom = '$username'");

        if ($updateQuery) {
            // Envoyer le nouveau mot de passe par email (vous devez implémenter cette partie)
            sendPasswordEmail($username, $newPassword);

            // Rediriger vers la page de connexion avec un message de succès
            $_SESSION['success_message'] = "Un nouveau mot de passe a été envoyé à votre adresse e-mail.";
            header("Location: ../index.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Une erreur s'est produite lors de la réinitialisation du mot de passe. Veuillez réessayer.";
            header("Location: ../index.php");
            exit();
        }
    } else {
        $_SESSION['error_message'] = "Aucun utilisateur avec ce nom d'utilisateur n'a été trouvé.";
        header("Location: ../index.php");
        exit();
    }
}

// Fonction pour générer un mot de passe aléatoire
function generateRandomPassword() {
    // Générer une chaîne aléatoire de longueur 8 avec des lettres majuscules, des lettres minuscules et des chiffres
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $password = '';
    $length = 8;

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}

// Fonction pour envoyer le nouveau mot de passe par email
function sendPasswordEmail($username, $password) {
    // Implémentez votre logique d'envoi d'email ici
    // Vous pouvez utiliser des bibliothèques ou des services SMTP pour envoyer l'e-mail
    // Assurez-vous d'inclure le nouveau mot de passe généré dans le contenu de l'e-mail
    // Exemple :
    /*
    $to = $username;
    $subject = "Nouveau mot de passe";
    $message = "Votre nouveau mot de passe est : " . $password;
    $headers = "From: example@example.com";

    mail($to, $subject, $message, $headers);
    */
}
?>
