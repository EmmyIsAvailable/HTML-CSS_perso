<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CyberSens</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<?php include "header.php";?>
	<main>
		<section class="banner_form">
		<div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div>
		<div class="banner_content">
			<div class="banner_text"><h1>Formulaire de contact</h1></div>
		</div>
		</section>
		<form id="contact_form" class="cssform" method="post" action="#">
			<p class="ligne">
				<input id="first_name" name="first_name" type="text" placeholder="First name"/>
			</p>
			<p class="ligne">
				<input id="last_name" name="last_name" type="text" placeholder="Last name"/>
			</p>
			<p>
				<input id="email" name="email" type="text" placeholder="Email"/>
			</p>
			<p>
				<textarea id="message" name="message" type="enter" placeholder="Votre message ici..." rows="7" cols="60"></textarea><br>
			</p>
			<p><input id="submit_button" type="submit" value="Send email" /></p>
		</form>
	</main>
	<?php include 'footer.php';?>
	</body>
</html>