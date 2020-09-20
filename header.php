<?php
	session_start();

	$menuItems = [
		[
			'id' => 0,
			'name' => 'Inici',
			'url' => 'index.php'
		],
		[
			'id' => 1,
			'name' => 'Informació',
			'url' => 'informacio.php'
		],
		[
			'id' => 2,
			'name' => 'Descarregues',
			'url' => '#'
		]
	]
?>	
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.php">Sailor Moon en català</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav mr-auto">
		    	<?php foreach ($menuItems as $item) { ?>
			    	<li class="nav-item">
			        	<a class="nav-link <?= ($pageId == $item['id']) ? 'active' : '' ?>" href="<?=$item['url']?>"><?=$item['name']?></a>
			      	</li>
		    	<?php } ?>
		    </ul>
		      <div>
		      <?=isset($_SESSION['userUid']) ? $_SESSION['userUid'] : ''?>
		      </div>

		  </div>
		</nav>
	</header>

