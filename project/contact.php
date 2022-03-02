<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Pragma Security</title>
		<link rel="icon" href="img/logo.png">
		<link rel="stylesheet" href="style-contact-form.css">
	</head>
	<body>
	<?php include 'header.php';?>
	<main>
		<section id="contact">
			<h1 class="section-header">Contact</h1>
			<div class="contact-wrapper">
				<form id="contact-form" class="form-horizontal" role="form">
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
						<input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
						</div>
					</div>
					<textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
					<button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
						<div class="alt-send-button">
							SEND
						</div>
					</button>
				</form>
				<div class="direct-contact-container">
					<ul class="contact-list">
						<li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Paris, France</span></i></li>
						<li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone">+33 6 01 23 45 67</span></i></li>
						<li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#">contact@pragma-sec.com</a></span></i></li>
					</ul><hr>
					<ul class="social-media-list">
						<li><a href="#" target="_blank" class="contact-icon">
							<i class="fa fa-github" aria-hidden="true"></i></a>
						</li>
						<li><a href="#" target="_blank" class="contact-icon">
							<i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</li>      
					</ul><hr>
				<div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
				</div>
			</div>
		</section>
	</main>
	<script src="https://kit.fontawesome.com/9333ebbae6.js" crossorigin="anonymous"></script>
	<script src="./assets/main.js"></script>
	<script src="./assets/contact-form.js"></script>
	</body>
</html>