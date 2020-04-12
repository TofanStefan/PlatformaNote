 
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
  <link rel="stylesheet" type="text/css" href="LogInStyles.css">

</head>
<body>
  <div class="fullPage">
    

<form class="was-validated" method="POST"action="databaseRegister.php">
  <div class="container centerInreg ">
      <div class="form-group">

         <label  class="text-danger text" for="nume"  >Nume:</label>

              
            <input type="text"  name="nume" class="form-control"  placeholder="&#xf501;  Introduceti numele." style="font-family:Arial, FontAwesome" required>
            <div class="invalid-feedback" style="padding-bottom:2%;">Acest camp este obligatoriu..

    </div>
      <div class="form-group">

         <label for="cod" class="text-danger text" >Cod:</label>

              
            <input type="text" name="cod" class="form-control"  placeholder="&#xf121;  Introduceti codul." style="font-family:Arial, FontAwesome"required>
            <div class="invalid-feedback" style="padding-bottom:2%";>Acest camp este obligatoriu..

    </div>
    
    <div class="form-group">

         <label for="email" class="text-danger text"  >Email:</label>

              
            <input type="email" name="email" class="form-control" id="email" placeholder="&#xf0e0;  Introduceti email-ul." style="font-family:Arial, FontAwesome"required>
            <div class="invalid-feedback" style="padding-bottom:2%">Acest camp este obligatoriu..

    </div>
    <div class="form-group">

      <label for="parola" class="text-danger text" >Parola:</label>

        <input type="password" name="parola" class="form-control" id="pwd" placeholder="&#xf084;  Introduceti parola. "style="font-family:Arial, FontAwesome"required>
        <div class="invalid-feedback" style="padding-bottom:2%;">Acest camp este obligatoriu..

    </div>
    <div class="form-group form-check-inline">
            <label class="form-check-inline  text-danger">
              <input class="form-check-input" type="radio" name="optradio" > <b>Profesor</b>
              
            </label>
            <label class="form-check-inline mono text-primary">
               <input class="form-check-input" type="radio" name="optradio"> <b>Student</b>
             </label>
        </div>
         <div>
           <button type="submit" class="btn btn-danger ">Inregistrare</button>
       </div>

    </div>

</form>
      <?php
      // Mesaj cont indisponibil
      if(isset($_GET['succes'])&&$_GET['succes']=='false')
          echo'<p style="color:#ff0c11;text-align:center;font-size: 16px;padding-top:5%;font-family: Constantia"> Acest email este deja folosit!!</p>'
            ?>
</div>
</body>
</html>