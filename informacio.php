<?php

	$pageId = 1;

?>
<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sailor Moon en català</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php
		require "header.php";
	?>

	<div id="main-content" class="container">
		<h2 class="text-center">Informació</h2>
		<p>Sailor Moon va néixer l'any 1992 al Japó i a Catalunya va arribar l'any 2001 a través del K3, on es va emetre l'anime sencer d'una sola tirada. Des de l'any 1992 fins a l'actualitat que la franquícia de Sailor Moon no ha parat de presentar novetats al marcat en tota mena de formats diferents. No obstant això, la seva història només consta de cinc arcs o temporades que fins avui dia continuen tenint trajectòria a partir de noves versions i/o productes. Cal destacar que com a franquícia ha anat molt més enllà del Japó, molts països d'arreu del món cada any treuen productes amb la marca oficial i ha estat un dels animes doblats amb més idiomes de la història. Per aquestes raons i moltes més, Sailor Moon és un dels animes més rellevants de la història i el Shojo referent per excel·lència.</p>
		<p>Una vegada feta aquesta introducció, m'agradaria presentar-vos els tres apartats que vénen a continuació. Dins de tota la seva varietat i extensió, crec que tota la informació de Sailor Moon es pot dividir en un primer apartat que expliqui la història que ha viscut la franquícia des de l'any 2020, seguint-lo d'un segon apartat que narri les 5 temporades (principalment de l'anime dels noranta, ja que ha estat l'únic traduït al català) i finalment un tercer apartat que mostri tots els diferents personatges que han aparegut en les diferents versions de Sailor Moon. Dit això, us convido a gaudir de totes les dades que conformen l'univers de Sailor Moon.</p>
		<div id="home-titles" class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<a href="historia.php">
					<div id="historia">
						<span>Història</span>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<a href="episodis.php">
					<div id="episodis">
						<span>Episodis</span>
					</div>					
				</a>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<a href="#">
					<div id="personatges">
						<span>Personatges</span>
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