<?php
require 'databaseConnect.php';
$email = $_POST['email'];
$pwd = $_POST['parola'];
$sql= "SELECT parola FROM student WHERE email='$email'" ;
$result=mysqli_query($connect,$sql);
$pwd_dB=$result->fetch_assoc();
if(!isset($pwd_dB))
{
	echo '<H1 style="font-size:100px; color:red;padding-top:20%; text-align:center;"> Opps email or pw wrong </H1>';
}
elseif(!empty($pwd_dB['parola']&&$pwd_dB['parola']==$pwd))
{
	echo '<H1 style="font-size:100px; color:red;padding-top:20%; text-align:center;"> Welcome to the account </H1>';
}