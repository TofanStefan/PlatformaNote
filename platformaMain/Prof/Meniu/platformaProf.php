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
    <script src="scripts/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/b8bb4f51ef.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" type="text/css" href="style.css" >

    <style type="text/css">

    </style>

</head>

<body class="bg-dark" style="position: relative; overflow:auto;">
<div class="row">
    <div class="col-9"></div>
    <div class="col-3">
        <form class="float-right" action="../../logOut.php">
            <button class="btn btn-primary float-right" style="font-weight:bold">Log Out</button>
        </form>
    </div>
</div>




    <div class="row vh-100 d-flex align-items-center justify-content-center">

       <!--Studenti display:block -->
            <div id="hide" class="col-md-3" style="min-width: 250px;">
            <a  href="../Studenti/Studenti.php"  style="display: block;">
                <div id="border" class="card" style="border-radius: 30px; border-top-left-radius:60px; border-bottom-right-radius:60px;box-shadow: 0px 0px 50px rgba(0,0,0,0.8); ">

                <div class="card-body text-center">
                    <h4><span class="badge badge-primary  badge-pill text-wrap pb-1">STUDENTI</span></h4>
                </div>
                <img class="card-img-bottom card-image" src="images/student.png">
            </div>
            </a>
        </div>
        <!--Add materie display:none -->
        <div id="addM" class="col-md-3" style="min-width: 400px;display:none">
            <div id="addM" class="container" style=" position :relative;border: solid 2px black;box-shadow: 0px 0px 50px rgba(0,0,0,0.8);background-color: #F5F5F5;border-radius: 25px; height: 80vh;">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark "  onclick="exit()" style="margin-top: 10px;margin-bottom: 50px; border-radius: 25px; ">Inapoi</button>
                </div>
                <div id="add" class="d-flex justify-content-center" style="padding-bottom: 50px; ">
                    <form id="add-materie" class="form-inline">
                        <input type="text" class="form-control" placeholder="Introduceti o materie" id="txtInput">
                        <button  class="btn btn-success">Add</button>
                    </form>
                </div>
                <div id="remove" class="container" style="height: 60%; overflow-y: auto; ">

                    <?php
                    require 'scripts/databaseConnect.php';
                    $sql = "SELECT DISTINCT(nume) FROM materii ORDER BY nume";
                    $result=mysqli_query($connect,$sql);

                    while($date_DB=$result->fetch_assoc()) {
                        $id=$date_DB['nume'];
                        echo '<div id="'.$id.'" class="d-flex justify-content-between">';
                        echo '<h4 >'.$date_DB['nume'].'</h4>';
                        echo '<button type="button" class="btn btn-danger btn-circle btn-sm for-button"  onclick="remove(this)">－</button>';
                        echo '</div>';

                    }
                    ?>
                </div>
                <div class="d-flex justify-content-center" style="    position: absolute;bottom: 0; left: 0;right: 0;">
                    <button id="sub" type="submit" onclick="exit()";   class="btn btn-success " style="margin-bottom: 0px; border-radius: 25px; ">Submit</button>

                </div>
            </div>
        </div>
        <!--Mesaje display:block -->
            <div id="hide1" class="col-md-3" style="min-width: 250px;" >
            <a href="Studenti.php" style="display: block;">
            <div id="border" class= "card" style="border-radius: 30px; border-top-left-radius:60px; border-bottom-right-radius:60px; box-shadow: 0px 0px 50px rgba(0,0,0,0.8); ">

                <div class="card-body text-center">
                    <h4><span class="badge badge-primary  badge-pill text-wrap pb-1">MESAJE</span></h4>
                </div>
                <img class="card-img-bottom card-image ml-2" src="images/messages.png">
            </div>
            </a>
        </div>

        <!--Add materie display:block -->
          <div class= "col-md-3"style="min-width: 250px; " >

            <a id="hide2"  onclick="addMat()"  style ="display: block;">
                <div id="border" class="card" style="border-radius: 30px; border-top-left-radius:60px; border-bottom-right-radius:60px; box-shadow: 0px 0px 50px rgba(0,0,0,0.8); ">

                <div class="card-body text-center">
                    <h4><span class="badge badge-primary  badge-pill text-wrap pb-1">MATERIE</span></h4>
                </div>
                <img class="card-img-bottom card-image" src="images/student_add.png">
            </div>
            </a>
        </div>
    </div>
 <script>
     addMaterie();
     sendData();
     currentItm();
 </script>

</body>
</html>