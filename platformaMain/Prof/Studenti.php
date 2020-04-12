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
    <link rel="stylesheet" type="text/css" href="../platformaStyle.css">

</head>
<body style="background-color: white;">
<div class="container-fluid">
    <div class="row">
        <div class="col-3" style="background-color:gray;padding-top: .2%;">
            <?php
            echo "<p style='font-size: 25px;font-family: Corbel;padding-left:5%;margin-bottom: 0;'>
                        Welcome back ,$_SESSION[nume]!</p>";
            $mydate=getdate(date("U"));
            echo "<p style='font-size: 15px;font-family: Corbel;padding-left: 5%;'>$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year].</p>";
            ?> </div>
        <div class="col-6 mid-col">
            <a href="platformaProf.php" style="font-family: 'Droid Sans Mono';font-size: 30px;padding: 4%;color: black">HOME</a>
            <form class="form-inline float-right" style="padding: 2%;">

                <input type="text" placeholder="....." name="cauta" class="form-control">
                <button type="submit" class="btn btn-primary">Cauta</button>
            </form>
        </div>
        <div class="col-3" style="background-color:gray;padding: 1%;">
            <form action="../logOut.php" style="padding-right: 7%">

                <button class="btn btn-outline-dark float-right" style="font-weight:bold">Log Out</button>
            </form>
        </div>
    </div>
        <div class="row">
            <div class="col-3" style="font-size: 30px;font-family: 'Droid Sans Mono Slashed'">STUDENTI..</div>
        </div>


</div>

<ul class="list-group  float-left scroll">
<?php
require 'showStud.php';
while($date_DB=$result->fetch_assoc())
{
    $id=$date_DB['id'];
    $name=$date_DB['nume'];
    $email=$date_DB['email'];
    echo "<a href='Studenti.php?id=$id' style='color: black;' ><button  class=\"list-group-item list-group-item-success btn btn-success textList \"> <p> $name , </a> <p>ID# $id ,$email</p></button></a>";
}
?>
</ul>
<div class="container">
    <?php
    if(isset($_GET['id']))
    {
        echo "<table class='table table-dark table-hover'><thead><tr><th>Materie</th><th>Nota activitate</th><th>Nota Examen</th> <th>Media</th> <th>Promovat</th></tr> </thead>";
        require '../../LogIN_SignUP/databaseConnect.php';
        $id=$_GET['id'];
       $sql="SELECT * FROM materii WHERE user_id='$id'";
       $result=mysqli_query($connect,$sql);
        while($date_DB=$result->fetch_assoc())
        {
            $nume=$date_DB['nume'];
            $nota_activitate=$date_DB['nota_activitate'];
            $nota_examen=$date_DB['nota_examen'];
            $media=$date_DB['media'];
            if($media<5.00)
                $promovat='Nu';
            else
                $promovat='Da';

           echo  "<tbody><tr><td>$nume</td><td>$nota_activitate</td><td>$nota_examen</td><td> $media</td><td>$promovat</td></tr></tbody>";


        }




    }
    ?>
</div>


</body>
</html>