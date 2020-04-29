
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
  <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body class="bg-dark">

           <form  method="POST"  class="was-validated " style="position: relative;width: 450px;padding: 40px;border:solid 2px black;border-radius: 40px;box-shadow: 0px 0px 50px rgba(0,0,0,0.8);" action="databaseCheck.php" >
                <div class="form-group" ;">
                    <h4 class="text-center"style="color: black" >Log in</h4><br>
                    <input type="email" name="email" class="form-control bg-light"  placeholder="&#xf501;  Introduceti email-ul." style="font-family:Arial, FontAwesome" required>
                </div>
                <div class="form-group">
                    <input type="password" name="parola" class="form-control bg-light "  placeholder="&#xf084;  Introduceti parola. "style=";font-family:Arial, FontAwesome" required>
                </div>
                <div class="form-group form-check-inline">

                    <label class="form-check-inline text-danger">
                        <input class="form-check-input" type="radio" name="optradio"  value="prof" > <b>Profesor</b>
                    </label>

                    <label class="form-check-inline text-primary">
                        <input class="form-check-input" type="radio" name="optradio"  value="stud" checked="checked"> <b>Student</b>
                    </label>
                </div>
                <div class="row">
               <div class="container" style=" display:flex;justify-content:space-around;">
                    <button class="btn btn-dark auto">Submit</button></div>

                </div>
               <div class="row">
               <div class="container" style=" position:absolute;bottom: 8px; left: 37%;">
                   <?php
                   // Mesaj cont indisponibil
                   if(isset($_GET['succes'])&&$_GET['succes']=='false'||!isset($_GET['succes']))
                       echo' <a href="Inregistrare.php" style="color: black" role="link">No account?</a>';
                   ?>



               </div>

               </div>
               <?php
               // Mesaj cont indisponibil
               if(isset($_GET['succes'])&&$_GET['succes']=='false')
                   echo'<p style="color:black;text-align:center;font-size: 16px;padding-top:5%;font-family: Constantia"> No such user found.</p>';
                if(isset($_GET['succes'])&&$_GET['succes']=='true')
                    echo'<p style="color:black;text-align:center;font-size: 16px;padding-top:5%;font-family: Constantia"> Account created.</p>';
               ?>
            </form>

</body>
</html>