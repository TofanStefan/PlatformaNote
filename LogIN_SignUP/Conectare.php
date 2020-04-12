<?php
session_start();
if(isset($_SESSION['id']))
    header("Location:../platformaMain/Stud/platformaStud.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Conectare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/b8bb4f51ef.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="LogInStyles.css">

</head>
<body>
	<div class="fullPage">
		

        <form method="POST"  class="was-validated" action="databaseCheck.php" >
	        <div class="container center ">

                <div class="form-group">

                    <label class="text-danger text"  >Email:</label>
                    <input type="email" name="email" class="form-control"  placeholder="&#xf501;  Introduceti email-ul." style="font-family:Arial, FontAwesome" required>

                </div>
                <div class="form-group">

                    <label class="text-danger text" >Parola:</label>
                        <input type="password" name="parola" class="form-control"  placeholder="&#xf084;  Introduceti parola. "style="font-family:Arial, FontAwesome" required>
                </div>
                <div class="form-group form-check-inline">
                    <label class="form-check-inline mono text-danger">
                        <input class="form-check-input" type="radio" name="optradio" > <b>Profesor</b>
                    </label>
                    <label class="form-check-inline mono text-primary">
                        <input class="form-check-input" type="radio" name="optradio" checked="checked"> <b>Student</b>
                     </label>
                </div>
                <div style ="margin:auto;width: 50%;padding-left: 8%;padding-bottom: 2%">
          	    <button class="btn btn-primary ">Logare</button>
                <a href="Inregistrare.php" class="btn btn btn-danger" role="button">Inregistrare</a>



        </form>
        <?php
        // Mesaj cont creat cu succes
        if(isset($_GET['succes'])&&$_GET['succes']=='true')
        echo '<p style="color:#21ff2f;text-align:center;font-family: Consolas;font-size: 16px;padding-top:10%;">Cont creat cu succes!!</p>';
        if(isset($_GET['succes'])&&$_GET['succes']=='false')
            echo '<p style="color:#ff000f;text-align:center;font-family: Consolas;font-size: 16px;padding-top:10%;">Datele introduse sunt gresite..</p>';
        ?>
    </div>


</div>






</body>
</html>