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
	            <h5 class="card-title text-center">Iniciar sessió</h5>
	            <?php
				if (isset($_SESSION['userId'])) {
					echo '<form action="includes/logout.inc.php" method="post" >
				<button type="submit" name="Logout-submit">Logout</button>
			</form>';
				}
				else {
					echo '<form action="includes/login.inc.php" method="post" >
				<form class="form-signin">
	              <div class="form-label-group">
	                <input type="email" name="mailuid" class="form-control" placeholder="Correu electrònic" required autofocus>
	                <label for="inputEmail">Correu electrònic</label>
	              </div>

	              <div class="form-label-group">
	                <input type="password" name="pwd" class="form-control" placeholder="Contrasenya" required>
	                <label for="inputPassword">Contrasenya</label>
	              </div>

	              <div class="custom-control custom-checkbox mb-3">
	                <input type="checkbox" class="custom-control-input" id="customCheck1">
	                <label class="custom-control-label" for="customCheck1">Recordar contrasenya</label>
	              </div>
	              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login-submit">Iniciar sessió</button>
			</form>';
				}
			?>
	              <hr class="my-4">
	              <p class="message">Encara no formes part del club de fans? <a href="signup.php">Registra't</a></p>
	            </form>
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