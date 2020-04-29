<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Platforma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/b8bb4f51ef.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../platformaStyle.css";

</head>
        <body id="wrapper" style="overflow-y: auto">
    <!--Header-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" style="background-color:#343a40;padding-top: .2%;border-bottom:3px double white;">
                <?php
                echo "<p style='font-size: 25px;font-family: Corbel;padding-left:5%;margin-bottom: 0;color: white;'>
                            Welcome back ,$_SESSION[nume]!</p>";
                $mydate=getdate(date("U"));
                echo "<p style='font-size: 15px;font-family: Corbel;padding-left: 5%;color: white'>$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year].</p>";
                ?> </div>
            <div class="col-6" style="   background-color:#343a40;border-bottom:3px double white;
    padding: .1%;
    border-left:double;
    border-right:double;
    border-color: white;">
                <a href="platformaProf.php" style="font-family: 'Droid Sans Mono';font-size: 30px;padding: 4%;color: white">HOME</a>
                <form class="form-inline float-right" style="padding: 2%;">
                    <input type="text" placeholder="....." name="cauta" class="form-control">
                    <button type="submit" class="btn btn-primary">Cauta</button>
                </form>
            </div>
            <div class="col-3" style="background-color:#343a40;padding: 1%;border-bottom:3px double white;">
                <form action="../logOut.php" style="padding-right: 7%">

                    <button class="btn btn-primary float-right" style="font-weight:bold">Log Out</button>
                </form>
            </div>
        </div>

    </div>
    <!--Student List toggleable bar-->
    <!------------------------------------------------------------------------------------------------>
    <!--Tabel materie+ note +verificare promovare-->
    <div class="container">
        <div class="row">
            <div class="col">
                <table class='table table-dark table-hover text-center' style='margin-top: 20px;'><thead><tr><th>Materie</th><th>Nota activitate</th><th>Nota Examen</th> <th>Media</th> <th>Promovat</th></tr> </thead>
                    <!--Tabel materie+ note +verificare promovare-->
                     <?php

                                require '../../LogIN_SignUP/databaseConnect.php';
                                $id=$_SESSION['id'];
                               $sql="SELECT * FROM materii WHERE user_id='$id'";
                               $result=mysqli_query($connect,$sql);
                               while($date_DB=$result->fetch_assoc()) {
                                   $nume = $date_DB['nume'];
                                   $nota_activitate = $date_DB['nota_activitate'];
                                   $nota_examen = $date_DB['nota_examen'];
                                   $media = $date_DB['media'];
                                   if ($date_DB['promovat'] != true)
                                       $promovat = 'NU';
                                   else
                                       $promovat = 'DA';

                                   echo "<tbody><tr><td>$nume</td><td>$nota_activitate</td><td>$nota_examen</td><td> $media</td>";
                                   if($promovat=='NU')
                                   echo "<td style='color: red; font-weight: bold'>$promovat</td>";
                                   else
                                       echo "<td>$promovat</td>";
                                   echo "</tr></tbody>";
                               }
        ?>
                </table>
            </div>
        </div>
    </div></body>
</html>