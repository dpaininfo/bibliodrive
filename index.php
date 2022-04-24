<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Biblio Drive</title>
  </head>
  <body>
	<div class="container">
		<div class="row">	
			<div class="col-sm-9">	<!-- recherche -->
				<?php
					include "recherche.php";
				?>
			</div>
			<div class="col-sm-3">	<!-- image -->
				<img src="images/pile-de-livres.png" alt="Bibliothèque"/>
			</div>
		</div>
		<div class="row">	
			<div class="col-sm-9">	<!-- partie principale -->
				<?php
					include "carousel.php";
				?>
			</div>
			<div class="col-sm-3">	<!-- partie identification -->
				<?php
					include "login.php";
				?>
			</div>
			</div>
		</div>
	</div>
  </body>
</html>