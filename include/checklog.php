 <?php
 include("./connect.php");
// check the information
$email = $_POST["email"];
$password = $_POST["password"];

$query = mysqli_query($con," SELECT * FROM employe WHERE email = '$email' && matricule = '$password' ");
$rows = mysqli_num_rows ($query);

if ($rows > 0):
    $_SESSION['email'] = $email;

    header("Location:../formule.php");
    else: echo "<script> alert('wrong email or password') </script>";
    
endif;
//submit information
$user = htmlspecialchars(strtolower(trim($_POST['email'])));
$pass = md5($_POST['password']);
$select =  "INSERT INTO sign_in (email,password) VALUE ('$user','$pass')";

if (mysqli_query($con, $select)):
    $_SESSION['$email'] = $user;
endif;
