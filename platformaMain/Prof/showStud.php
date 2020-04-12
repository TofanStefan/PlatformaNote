<?php
require '../../LogIN_SignUP/databaseConnect.php';
$sql="SELECT *FROM student ";
$result=mysqli_query($connect,$sql);

