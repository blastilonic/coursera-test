<?php

	$pageId = 0;

?>
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

	<div class="container py-5">
	    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(images/jumbotron.png);">
	      <h2 class="mb-4">
	        La pàgina de Sailor Moon en català
	      </h2>
	      <p class="mb-4">
	       	Descobreix el club de fans amb excés a contingut exclusiu
	      </p>
	      <a href="login.php" class="btn btn-primary">Club de fans</a>
	    </div>
	</div>

	<div id="main-content" class="container">
		<div id="home-titles" class="row">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<a href="#">
					<div id="qui-som">
						<span>Qui som?</span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<a href="#">
					<div id="veure-sailormoon">
						<span>On puc veure Sailor Moon en català?</span>
					</div>					
				</a>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<a href="contacta.html">
					<div id="contactar">
						<span>Contactar</span>
					</div>						
				</a>
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

