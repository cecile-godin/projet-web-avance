<?php

				// Affiche toutes les informations, comme le ferait INFO_ALL
				//phpinfo();

				// Affiche uniquement le module d'information.
				// phpinfo(8) fournirait les mêmes informations.
				//phpinfo(INFO_MODULES);
				$pdo = new PDO("sqlite:./database.sqlite");
				$stmt = $pdo->prepare('SELECT * FROM article');
				$stmt -> execute();
				$articles = $stmt -> fetchAll(PDO::FETCH_ASSOC);//afficher les articles
				var_dump($_GET);
				$id_article=array(2);
				if (empty($id_article)) {
				echo '$var is either 0, empty, or not set at all';
				}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Cécile GODIN" />
  <meta name="keywords" content="document html5 mmi" />
  <meta name="description" content="" />
    <link rel="stylesheet" href="web/css/main.css" />
    <link rel="stylesheet" href="web/css/bootstrap.css" />
  <title></title>
</head>
	<body>
		<header>
		</header>
			
		<nav>
		</nav>
			

		<section>
				
			
			<?php foreach ($articles as $articles) {?>
		
			<h1> <?php echo $articles ['title'];?> </h1>
			<p><a href="index.php?id_article=<?php echo $articles ['id'];?>"> Supprimer </a> </p>
			<img src="images/cookie.jpg" alt="cookie" class="img-circle">
			<p class="lead"> <?php echo $articles ['description'];?> </p>
			<p> <a href="<?php echo $articles ['link'];?>"> <button type="button" class="btn btn-default"> Lire l'article complet </button> </a> </p>
			<p class="text-uppercase"> Source: <?php echo $articles ['author'];?> </p>
			
			
			
			<?php } ?>	
			
			<script type="text/javascript" src="es6/app.js"></script>
			<script type="text/javascript" src="web/js"></script>
		</section>
			
		<footer>
		</footer>
	</body>
</html>
