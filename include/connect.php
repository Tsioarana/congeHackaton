<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'gestionconge';
$con = mysqli_connect($host,$user,$password,$db);

// $dsn = 'mysql:host=localhost;dbname=gestionconge';
// $user = 'root';
// $pass = '';

// try{
//     $con = new PDO($dsn, $user, $pass);
//     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo 'You Are Connected';
// }
// catch(PDOException $e){
//     echo 'failed' . $e->getMessage();
// }