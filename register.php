<!DOCTYPE html>
<html>
<head>
	<title>Enregistrement</title>
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
		.jombotron
		{
			padding: 80px;
			margin: 20% 70px 0px 70px;
			color: inherit;
			background-color: #eee;
		}
	</style>
</head>
<body>
	<div class="container container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="jombotron">
					<form class="form-group">
						<div class="row">
							<label for="text" class="col-md-5 col-md-offset-4">Entrer votre addresse e-mail :</label>
						</div>
						<div class="row">
							<div class="col-md-5 col-md-offset-4">
								<input type="text" name="email" id="email" placeholder="E-mail" class="form-control" required>
							</div>
						</div>
						<br/>
						<div class="row">
							<label for="text" class="col-md-5 col-md-offset-4">Entrez le numero :</label>
						</div>
						<div class="row ">
							<div class="col-md-5 col-md-offset-4">
								<input type="numero" name="numero" placeholder="Numéro de paiement" class="form-control" required>
							</div>
						</div>
						<br/>
						<div class="row">
								<div class="col-md-5 col-md-offset-4">
									<button class="btn btn-primary pull-right form-control" type="submit">Valider</button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/jquery.mobile.min.js"></script>
	<script>
		$(function(){
			$('#email').focus();
		});
	</script>
</body>
</html>