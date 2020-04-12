<?php
require 'databaseConnect.php';
session_start();
$email = $_POST['email'];
$pwd = $_POST['parola'];
$sql= "SELECT * FROM student WHERE email='$email'" ;
$result=mysqli_query($connect,$sql);
$date_DB=$result->fetch_assoc();
$pwd_cript=$date_DB['parola'];/// parola criptata din baza de date
$check=password_verify($pwd,$pwd_cript); // verificam parola cu cea din baza de date , email unic -> o singura verificare
if(!$check)
{
	header("Location:Conectare.php?succes=false");
	die();
} else {
    $_SESSION['id']=$date_DB['id'];
    $_SESSION['nume']=$date_DB['nume'];
    $_SESSION['email']=$date_DB['email'];
    $_SESSION['cod']=$date_DB['cod'];
	header("Location:../platformaMain/platformaStud.php");
	}
?>