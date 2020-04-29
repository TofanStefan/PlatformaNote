
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inregistrare</title>
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

<form class="was-validated bg-dark" style="width: 450px;padding: 40px;border:solid 2px black;border-radius: 40px;box-shadow: 0px 0px 50px rgba(0,0,0,0.8);" method="POST"action="databaseRegister.php">

    <div class="form-group">

        <h3 class="text-center" style="color: black">Sign up</h3><br>

        <input type="text"  name="nume" class="form-control bg-light"  placeholder="&#xf501;  Introduceti numele." style="font-family:Arial, FontAwesome" required>

    </div>
    <div class="form-group">


        <input type="text" name="cod" class="form-control  bg-light"  placeholder="&#xf121;  Introduceti codul." style="font-family:Arial, FontAwesome" required>

    </div>

    <div class="form-group">

        <input type="email" name="email" class="form-control bg-light" id="email" placeholder="&#xf0e0;  Introduceti email-ul." style="font-family:Arial, FontAwesome"required>

    </div>
    <div class="form-group">

        <input type="password" name="parola" class="form-control bg-light" id="pwd" placeholder="&#xf084;  Introduceti parola. "style="font-family:Arial, FontAwesome"required>

    </div>
    <div class="form-group form-check-inline">
        <label class="form-check-inline  text-danger">
            <input class="form-check-input" type="radio" checked="checked" name="optradio" value="prof" > <b>Profesor</b>

        </label>
        <label class="form-check-inline mono text-primary">
            <input class="form-check-input" type="radio" name="optradio" value="stud"> <b>Student</b>
        </label>
    </div>
    <div class="row">
        <div class="container" style=" display:flex;justify-content:space-around;"> <button type="submit" class="btn btn-danger ">Submit</button> </div>
    </div>
    <?php
    // Mesaj cont indisponibil
    if(isset($_GET['succes'])&&$_GET['succes']=='false')
        echo'<p style="color:black;text-align:center;font-size: 16px;padding-top:5%;font-family: Constantia"> This email is in use.</p>';
    if(isset($_GET['succes'])&&$_GET['succes']=='falseCod')
        echo'<p style="color:black;text-align:center;font-size: 16px;padding-top:5%;font-family: Constantia"> Invalid code</p>';

    ?>
</form>


    </div>
</body>
</html>