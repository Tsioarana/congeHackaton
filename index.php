<?php
session_start();
include("./checkinfo/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist\css\style.css">
    <title><?php echo "Sign in" ?> </title>
</head>
<body class="body" style="background: #333;">
    <form class="form" action="checkinfo/checklog.php" method="POST">
        <div>
            <input class="form__input" type="text" name="username" placeholder="Nom utilisateur" required><br><br>
            <input class="form__input" type="password" name="password" placeholder="Mot de passe" required><br><br>
            <button class="form__btn" type=submit name="submit" style="background: ">Se connecter</button>
        </div>
    </form>
    <form class="form" action="oblié.php" method="POST">
        <div>
            <button class="form__btn" type=submit name="submit">mot de passé obliée</button>
        </div>
    </form>
</body>
</html>
