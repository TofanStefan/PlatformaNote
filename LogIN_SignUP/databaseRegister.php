<?php
require 'databaseConnect.php';
$name = $_POST['nume'];
$email = $_POST['email'];
$pwd = $_POST['parola'];
$cod = $_POST['cod'];
$sql = "INSERT INTO student (nume,email,parola,cod) VALUES ('$name','$email','$pwd','$cod')";
$result = mysqli_query($connect,$sql);
header("Location:Conectare.php");
?>