<?php
session_start();
session_destroy();
header("Location:../logIN_SignUP/Conectare.php");  //redirectionare la log in
?>