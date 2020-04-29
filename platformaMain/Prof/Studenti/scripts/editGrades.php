<?php

require 'databaseConnect.php';

if (isset($_POST['nA'])&&isset($_POST['nE'])&&isset($_POST['id'])&&isset($_POST['med'])&&isset($_POST['nume'])) {
    $notaA=$_POST['nA'];
    $notaE=$_POST['nE'];
    $media=$_POST['med'];
    $nume=$_POST['nume'];
    $x=0;
    if($media>=5)
        $x=1;
    $id=$_POST['id'];
    $sql = "UPDATE materii SET nota_activitate='$notaA', nota_examen='$notaE',media='$media',promovat='$x' WHERE user_id='$id' AND nume='$nume'";
    mysqli_query($connect,$sql);
    }


?>
