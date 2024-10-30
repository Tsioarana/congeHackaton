<?php
function emp_insert($connect, $values = array())
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'gestionconge';
    
    try {
        // Créer une connexion PDO
        $dsn = "mysql:host=$host;dbname=$db";
        $connect = new PDO($dsn, $user, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // Gérer les erreurs de connexion PDO
        die("Erreur de connexion : " . $e->getMessage());
    }
    $query = "INSERT INTO employe (nom,prenom,CIN,Tel,email,date_embauche,id_service,matricule,date_de_naissance)
              VALUES (?,?,?,?,?,?,?,?,?)";
    // die($query);
    $stmt = $connect->prepare($query);

    if (!$stmt) {
        // Erreur de préparation de la requête
        // Gérer l'erreur selon votre logique d'application
        return false;
    }

    // Exécution de la requête préparée avec les valeurs fournies
    
        // var_dump($values);die();
    if ($stmt->execute($values)) {
        // Succès de l'exécution de la requête
        return true;
    } else {
        // Erreur lors de l'exécution de la requête
        // Gérer l'erreur selon votre logique d'application
        return false;
    }
}
function redirect($page){
     header('location:' .$page);
}
$errors = [];
$message = "";
//check formule employe
if (isset($_POST['submit'])) :

    // check the information
    $Nom = htmlentities($_POST['nom']);
    $Prénom = htmlentities($_POST['prenom']);
    $Cin = htmlentities($_POST['CIN']);
    $Télé = htmlentities($_POST['Tel']);
    $Email = htmlentities($_POST['email']);
    $Date_Embauche = htmlentities($_POST['date_embauche']);
    $Sérvice = htmlentities($_POST['Service']);
    $matricule = htmlentities($_POST['matricule']);
    $date_naissance = htmlentities($_POST['date_de_naissance']);
    if (empty($Nom)) :
        $errors = '*veuillez entrer le nom';
    elseif (empty($Prénom)) :
        $errors = '*veuillez entrer le Prénom';
    elseif (empty($Cin)) :
        $errors = '*veuillez entrer le CIN';
    elseif (empty($Télé)) :
        $errors = '*veuillez entrer numéro téléphone ';
    elseif (empty($Email)) :
        $errors = '*veuillez entrer votre email';
    elseif (empty($Date_Embauche)) :
        $errors = '*veuillez entrer Date Embauche';
    elseif (empty($Sérvice)) :
        $errors = '*veuillez entrer sérvice';
    elseif (empty($matricule)) :
        $errors = '*veuillez entrer matricule';
    elseif (empty($date_naissance)) :
        $errors = '*veuillez entrer date naissance';
    else :        $values = array(
            $Nom,
            $Prénom,
            $Cin,
            $Télé,
            $Email,
            $Date_Embauche,
            $Sérvice,
            $matricule,
            $date_naissance
        );
        //submit information
        if (emp_insert($connect, $values) === true) :
            redirect('m_employe.php?message=success');
        else :
            $message = '*Veuillez réessayer';
        endif;
    endif;
endif;

