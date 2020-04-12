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
<body style="background-color: #000000;">
<div class="container-fluid">
    <div class="row">
        <div class="col-3" style="background-color:gray;padding-top: .2%;">
        <?php
            echo "<p style='font-size: 25px;font-family: Corbel;padding-left:5%;margin-bottom: 0;'>
                        Welcome back ,$_SESSION[nume]!</p>";
        $mydate=getdate(date("U"));
        echo "<p style='font-size: 15px;font-family: Corbel;padding-left: 5%;'>$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year].</p>";
         ?> </div>
        <div class="col-6 mid-col"></div>
        <div class="col-3" style="background-color:gray;padding: 1%;">
        <form action="../logOut.php" style="padding-right: 7%">

            <button class="btn btn-outline-dark float-right" style="font-weight:bold">Log Out</button>
        </form>
    </div> </div>
</div>
<div class="container">
            <form class="row" action="Studenti.php">
                <button  class="col-12 meniu btn btn-xxl btn-outline-success" style="margin-top: 15%;">
                    Studenti    </button>
            </form>
        <form class="row" action="Mesaje">
            <button class="col-12 meniu btn btn-xxl btn-outline-success">
                <a  >Mesaje</a></button>
        </form>
        <form class="row" action="add_materie">
                <button class="col-12 meniu btn btn-xxl btn-outline-success">
                    <a  >Adauga materie pentru toti studentii</a></button>
            </form>
</div>
</body>
</html>