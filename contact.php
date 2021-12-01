<!DOCTYPE html>
<html lang="de" id="top">
	<head>
		<meta charset="utf-8">
		<title>Kathleen Prasatko</title>
		<meta name="description" content="">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link href="css/style.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/04e95bce98.js " crossorigin="anonymous"></script>
		
	</head>

	<body class="contact">
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
		<div class="contact-wrapper">
		
		<main>
			<h3 class="contact-temp">Nur zur Ansicht</h3>
			<p class="contact-temp">Aktiviert ist das Formular erst, wenn ich das Backend fertig habe.</p>
			<form class="contact-form" action="#" method="post">
				<div>
					<label for="name">Ihr Name: </label>
					<input type="text" id="name" name="name">
				</div>
				<div>
					<label for="email">Ihre Emailadresse: </label>
					<input type="email" id="email" name="email">
					<div id="emailFailure"></div>
				</div>
				<div>
					<label for="message">Ihre Nachricht: </label>
					<textarea id="message" name="message" cols="20" rows="5"></textarea>
				</div>
				<div>
					<button class="button" type="submit">Abschicken</button>
				</div>
			</form>
		
		</main>
		<aside>
			<ul class="socialmedia">
				<li><a href="https://github.com/cult4nthropo"><i class="fab fa-github"></i></a></li>
				<li><a href="https://de.linkedin.com/in/kathleen-prasatko"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a href="https://twitter.com/cultanthropo"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</aside>
		</div>
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
		<script src="js/contact.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>