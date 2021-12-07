<!DOCTYPE html>
<html lang="de"  id="up">
	<head>
		<meta charset="utf-8">
		<title>Kathleen Prasatko</title>
		<meta name="description" content="">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link href="css/style.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/04e95bce98.js" crossorigin="anonymous"></script>
		
	</head>

	<body class="projekte">
		<div class="wrapper">
		<header>
		<img class="mainpic" src="pics/prasatko-kathleen_bewerbungsfoto.jpg" 
			alt="Foto Kathleen Prasatko" 
			width="120" >
		<h1>Kathleen Prasatko</h1>
		</header>
		<nav class="site-nav">
		<button class="menubutton" onclick="this.classList.toggle('show-menu')"><i class="fas fa-bars"></i></button>
		<?php
		include 'navigation.php';
		?>
		</nav>
		<main>
		<h2 class="visually-hidden">Codesnippets</h2>
		<article class="content">
			<h3>Kleine Beispiele meines JavaScript Codes:</h3>
		<?php
		$tasks = [
			'scan' => "Dateigröße Scan",
			'sound' => "Dateigröße Soundfile",
			'video' => "Dateigröße Videofile"
		];
		echo "<select name='codesnippets'>\n";
			foreach ($tasks as $task => $taskname){
				echo "<option id='$task'>$taskname</option>";
			}
		echo "</select>\n";
		?>
			<p>
			Meinen Code können Sie hier sehen: <a href="https://github.com/cult4nthropo">Github</a><br/>
			Neben den Sprachen, die ich bei der Umschulung lerne, beschäftige ich mich mit weiteren Techniken der Programmierung.
			So bin ich auf die Idee gekommen, diese Website zu entwickeln und als Grundlage der Präsentation zu gestalten.
			Die Python-Projekte, die auf GitHub zu sehen sind, habe ich begonnen, um meine Kenntnisse über das geforderte Maß hinaus
			zu entwickeln. <br/>
			Um mir neben Python, C# und SQL noch weitere Kenntnisse anzueignen, lerne ich auch Techniken der Webentwicklung und übersetze 
			die Python-Projekte in JavaScript. Aktuell lerne ich Java noch, sodass diese Beispiele hier noch fehlen - sie werden aber 
			in Kürze folgen. <br/>
			Um wirklich zu lernen und besser zu werden, denke ich mir kleine Programmierprojekte aus. Diese sind als \"Lernprojekte\" zu betrachten 
			und ändern sich beständig mit meinem Wissensstand.
		 </p>
		 <noscript>Wenn Sie JavaScript deaktiviert werden, können Sie meinen Code auch <a href="https://github.com/cult4nthropo">auf Github</a> einsehen.</noscript>
		</article>
		</main>
		</div>
		<footer class="site-footer">
			<div class="wrapper">
				<ul class="meta-nav">
					<li id="copyright">&copy; </li>
					<li> <a href="impressum.php"> Impressum und Datenschutz </a> </li>
					<li> <a href="contact.php">Kontakt</a></li>
					<li> <a href="#up">Nach oben </a></li>
				</ul>
			</div>
		</footer>
		<script src="js/script.js"></script>
	</body>
</html>