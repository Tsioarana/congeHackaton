<?php
// include("./function.php");
// function dmc_insert($connect, $values = array())
// {   
//     $params = "'" . implode("','", $values) . "'";
//     $query = "INSERT INTO demande_conge (date_debut, date_fin, duree, id_employe, id_type_conge, id_service, demande)
//               VALUES (" . $params . ")";
//     if (mysqli_query($connect, $query)) {
//         return true;
//     } else {
//         // var_dump(mysqli_error($connect));
//         // die();
//         var_dump($params);die();
//         return false;
//     }
// }

function dmc_insert($connect, $values = array())
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
    $query = "INSERT INTO demande_conge (date_debut, date_fin, duree, id_employe, id_type_conge, id_service, demande)
              VALUES (?,?,?,?,?,?,?)";

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

// check formule domande conge
if (isset($_POST['ajouter'])) {
    global $connect;
    // var_dump($_POST['date_debut']);die();
    // check the information
    $date_debut = isset($_POST['date_debut']) ? htmlentities($_POST['date_debut']) : '';
    $date_fin = isset($_POST['date_fin']) ? htmlentities($_POST['date_fin']) : '';
    $duree = isset($_POST['duree']) ? htmlentities($_POST['duree']) : '';
    $id_employe = isset($_SESSION['id_employe']) ? $_SESSION['id_employe'] : '';
    $id_type_conge = isset($_POST['type_conge']) ? htmlentities($_POST['type_conge']) : '';
    $id_service = isset($_POST['Service']) ? htmlentities($_POST['Service']) : '';
    $demande = 'attendre';

    if (empty($date_debut)) {
        $errors = '*veuillez entrer la date de début';
    } elseif (empty($date_fin)) {
        $errors = '*veuillez entrer la date de fin';
    } elseif (empty($duree)) {
        $errors = '*veuillez entrer la durée';
    } elseif (empty($id_type_conge)) {
        $errors = '*veuillez entrer le type de congé';
    } elseif (empty($id_service)) {
        $errors = '*veuillez entrer le service';
    } else {
        $values = array(
            $date_debut,
            $date_fin,
            $duree,
            $id_employe,
            $id_type_conge,
            $id_service,
            $demande
        );
        // submit information
        if (dmc_insert($connect, $values)) {
            redirect('voirconge.php?message=envoye');
        } else {
            $message = '*Une demande de congé a été refusée';
        }
    }
}
?>
