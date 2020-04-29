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
    <link rel="stylesheet" href="stud.css">

</head>
<body class="bg-dark" style="overflow: hidden";>
<div class="row">
    <div class="col-9"></div>
    <div class="col-3">
    <form class="float-right" action="../logOut.php">
        <button class="btn btn-primary float-right" style="font-weight:bold">Log Out</button>
    </form>
    </div>
</div>

    <div class="row vh-100 d-flex align-items-center justify-content-center">

        <div class="col-md-3">
            <a href="Studenti.php" style="display: block;">
                <div id="border" class="card" style="border-radius: 30px; border-top-left-radius:60px; border-bottom-right-radius:60px;box-shadow: 0px 0px 50px rgba(0,0,0,0.8); ">

                <div class="card-body text-center">
                    <h4><span class="badge badge-dark  badge-pill text-wrap pb-1">NOTE</span></h4>
                </div>
                <img class="card-img-bottom card-image" src="grades.png">
            </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="Studenti.php" style="display: block;">
            <div id="border" class= "card" style="border-radius: 30px; border-top-left-radius:60px; border-bottom-right-radius:60px; box-shadow: 0px 0px 50px rgba(0,0,0,0.8); ">

                <div class="card-body text-center">
                    <h4><span class="badge badge-dark  badge-pill text-wrap pb-1">MESAJE</span></h4>
                </div>
                <img class="card-img-bottom card-image ml-2" src="mes.png">
            </div>
            </a>
        </div>
        </div>
    </div>

</body>
</html>