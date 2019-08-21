<?php
session_start();
/*if (isset($_COOKIE['pass'])) {
	$_SESSION['pass']==$_COOKIE['pass'];
	header('Location:register.php');
} else {
	setcookie('pass','#passe',time() + 365*24*3600, null, null, false,true);
	$_SESSION['pass']==$_COOKIE['pass'];
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Votre Passe</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<script src="bootstrap/js/jquery.mobile.theme.min.css"></script>
	<script src="bootstrap/js/jquery.mobile.structure.min.css"></script>
	<style type="text/css">
		body
		{
			background-color: black;
		}
		#men
		{
			padding: 80px;
			margin: 20% 70px 0px 70px;
			color: inherit;
			background-color: #eee;

		}
		#pass
		{
			text-align: center;
			position: relative;
			
			z-index: 1;
		}
		p
		{
			text-align: center;
			font-family: Times New Roman;
			font-size: 20px;
		a
		{
			color: blue;
		}
	</style>
</head>
<body>
	<div class="container container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="jombotron" id="men">
					<section class="row form-group">
						<div class="row">
							<p>
								Le <strong>PASSE</strong> est un code qui permet d'accéder à la page<br/> de connexion
								des services <b>E-learning</b> de BOOSTERGROUP.<br/>
								Si vous n'avez pas votre <strong>PASSE</strong>,veuillez vous <a href="register.php">Enregistrer</a>
							</p>
						</div>
						<br/>
						<form>
							<div class="row" id="pass">
								<div class="col-md-5 col-md-offset-4">
									<input type="password" name="passe" class="form-control" placeholder="Entrez votre passe" id="passe" required>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-md-5 col-md-offset-4">
									<button class="btn btn-primary pull-right form-control" type="submit"><span class="glyphicon glyphicon-chevron-right pull-right" ></span>Continuer</button>
								</div>
							</div>
						</form>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/jquery.mobile.min.js"></script>
	<script>
		$(function(){
			$('#passe').focus();
		});
	</script>
</body>
</html>