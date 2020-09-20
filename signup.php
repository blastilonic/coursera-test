<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sailor Moon en català</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
	require "header.php";
?>
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
	        <div class="card card-signin my-5">
	          <div class="card-body">
	            <h5 class="card-title text-center">Registra't</h5>
	            
					<?php  

					if (isset($_GET['error'])) {
						if ($_GET['error'] == "emptyfields") {
							echo '<p>Fill in all fields!</p>';
						}
						else if ($_GET['error'] == "invaliduidmail") {
							echo '<p>Invalid username and e-mail!</p>';
						}
						else if ($_GET['error'] == "invaliduid") {
							echo '<p>Invalid username!</p>';
						}
						else if ($_GET['error'] == "passwordcheck") {
							echo '<p>Your password do not match!</p>';
						}
						else if ($_GET['error'] == "usertaken") {
							echo '<p>Username is already taken!</p>';
						}
					}
					else if (isset($_GET['signup']) && $_GET["signup"] == "success"){
						echo '<p>Signup successfull!</p>';
					}
					?>
					<form class="form-signin" action="includes/signup.inc.php" method="post">
			              <div class="form-label-group">
			                <input type="email" name="mail" class="form-control" placeholder="Correu electrònic" required autofocus>
			                <label for="inputEmail">Correu electrònic</label>
			              </div>
			              <div class="form-label-group">
			                <input type="text" name="uid" class="form-control" placeholder="Usuari" required autofocus>
			                <label for="inputUsuari">Usuari</label>
			              </div>
			              <div class="form-label-group">
			                <input type="password" name="pwd" class="form-control" placeholder="Contrasenya" required>
			                <label for="inputPassword">Contrasenya</label>
			              </div>
			              <div class="form-label-group">
			                <input type="password" name="pwd-repeat" class="form-control" placeholder="Repeteix la contrasenya" required>
			                <label for="inputPassword">Repeteix la contrasenya</label>
			              </div>
			              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="signup-submit">Registra't</button>
					</form>

					<hr class="my-4">
	              <p class="message">Ja formes part del club de fans? <a href="login.php">Entra al club de fans!</a></p>


	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
<?php
	require "footer.php";
?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>