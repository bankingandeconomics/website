<!DOCTYPE HTML>
<html>
<?php include("modules/head.php"); ?>
<title>Banking and Economics</title>
<body class="homepage">
<?php
  if ($_SERVER["HTTP_ACCEPT_LANGUAGE"] == "fr")
    header("location: index_fr.php");
  else 
    header("location: index.php");
?>
<!-- Header -->
<?php include("modules/header_en.php"); ?>
<!-- Features -->
<div id="features-wrapper">
	<div class="row">
		<div class="ban">
			<a href="#" class="image featured"><img src="articles/01_project/banques.jpg" alt=""/></a>
			<a href="projet.php">
			<h3>Project presentation </h3>
			<h2>The project: all you need to know</h2>
			<h4> By Loïc Brin </h4>
			<p>
				In this short article, I introduce the project. The purpose of it, the way we would do it, the idea behind it and so on.
			</p>
			</a>
		</div>
		<div class="ban">
			<a href="#" class="image featured"><img src="articles/02_html/HTML5.png" alt=""/></a>
			<a href="html.php">
			<h3> Project presentation </h3>
			<h2>Wich tools should we use?</h2>
			<h4> By Loïc Brin </h4>
			<p>
				HTML, CSS, Javascript... are part of the game. I show how to use Brackets, to make our lives easier.
			</p>
			</a>
			</a>
		</div>
		<div class="ban">
			<a href="#" class="image featured"><img src="articles/03_github/GitHub.png" alt=""/></a>
			<a href="github.php">
			<h3> Project presentation </h3>
			<h2>GitHub, a full rediscovery of it !</h2>
			<h4> By Loïc Brin </h4>
			<p>
				A recall about GitHub, why we need it and how we need it. The website is stored on github. They give a free way to publish on the internet.
			</p>
			</a>
		</div>
	</div>
</div>
<?php include("modules/footerh_en.php"); ?>
</body>
</html>