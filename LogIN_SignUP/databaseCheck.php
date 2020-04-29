<?php
require 'databaseConnect.php';
session_start();
$email = $_POST['email'];
$pwd = $_POST['parola'];
$checked=$_POST['optradio'];
if($checked=='prof')
    $FromDB='profesor';
else
    $FromDB = 'student';
$sql= "SELECT * FROM ".$FromDB." WHERE email='$email'" ;
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
    if($checked=='stud')
	header("Location:../platformaMain/Stud/platformaStud.php");
    else
        header("Location:../platformaMain/Prof/Meniu/platformaProf.php");
	}
?>