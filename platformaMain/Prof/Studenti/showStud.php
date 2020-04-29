<?php
require '../../../LogIN_SignUP /databaseConnect.php';
$sql="SELECT *FROM student  ORDER by nume";
$result=mysqli_query($connect,$sql);

