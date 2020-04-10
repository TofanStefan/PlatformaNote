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

		     <label class="text-danger text" for="email" >Email:</label>

		          
		       	<input type="email" name="email" class="form-control" id="email" placeholder="&#xf501;  Introduceti email-ul." style="font-family:Arial, FontAwesome" required>
          

		</div>
		<div class="form-group">

			<label class="text-danger text" for="pwd">Parola:</label>

				<input type="password" name="parola" class="form-control" id="pwd" placeholder="&#xf084;  Introduceti parola. "style="font-family:Arial, FontAwesome" required>


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
          	  <button class="btn-lg btn-primary ">Logare</button>
          	 
        	 
        	
          </div>
          
          <div style ="margin:auto;width: 50%;padding-left: 8%">
          	  
          	  <a href="Inregistrare.php" class="btn-lg btn btn-danger" role="button">Inregistrare</a>
        	 
        	
          </div>

       
    </div>
</form>

</div>






</body>
</html>