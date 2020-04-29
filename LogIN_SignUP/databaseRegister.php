<?php
require 'databaseConnect.php';
require 'Config.php';
$name = $_POST['nume'];
$email = $_POST['email'];
$pwd = $_POST['parola'];
$cod = $_POST['cod'];
$checked=$_POST['optradio'];
$pwd_criptat=password_hash($pwd,PASSWORD_DEFAULT);
echo'here';
if($checked=='prof'){
    echo'here';
    $FromDB='profesor';
    if($cod!=$profCode){
        header("Location:Inregistrare.php?succes=falseCod");
        die();}
    }
else {
    $FromDB = 'student';
    if($cod!=$studCode){
        header("Location:Inregistrare.php?succes=falseCod");
    die();}

}

$sql="SELECT email FROM ".$FromDB." WHERE email='$email'";

$result = mysqli_query($connect,$sql);
$check=mysqli_num_rows($result);

    if(!$check)
    {
        $sql = "INSERT INTO ".$FromDB." (nume,email,parola) VALUES ('$name','$email','$pwd_criptat')";
        $result = mysqli_query($connect,$sql);
        header("Location:Conectare.php?succes=true");

    }
    else
        header("Location:Inregistrare.php?succes=false");

?>