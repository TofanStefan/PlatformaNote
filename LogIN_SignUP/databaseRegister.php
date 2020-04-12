<?php
require 'databaseConnect.php';
$name = $_POST['nume'];
$email = $_POST['email'];
$pwd = $_POST['parola'];
$cod = $_POST['cod'];
$pwd_criptat=password_hash($pwd,PASSWORD_DEFAULT);
$sql="SELECT email FROM student WHERE email='$email'";
$result = mysqli_query($connect,$sql);
$check=mysqli_num_rows($result);
if(!$check)
{
    $sql = "INSERT INTO student (nume,email,parola,cod) VALUES ('$name','$email','$pwd_criptat','$cod')";
    $result = mysqli_query($connect,$sql);
    header("Location:Conectare.php?succes=true");

}
else
    header("Location:Inregistrare.php?succes=false");

?>