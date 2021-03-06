<html>
	<head>
		<title> Monstros </title>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.8.2/umd/popper.js"></script>
		<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		
		<link rel="stylesheet" href="css/bootstrap-social.css">
		<link rel="stylesheet" href="css/styles.css">
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Gustavo Gialim">
		<meta name="description" content="Monstros - Entre em contato">
	  <meta name="keywords" content="monstros, fitness, malhar, musculação">
	</head>
	<body>
		<div class="container-fluid">
			<!-- NavBar -->
			<div id="nav" class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <a class="navbar-brand text-nav" href="index.php">
						<img src="imgs/logo.png" width="43" height="40" class="d-inline-block align-top" alt="">
						Monstros
					  </a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
						  <li class="nav-item nav-link-extra">
							<a class="nav-link" href="index.php">Home</a>
						  </li>
						  <li class="nav-item nav-link-extra">
							<a class="nav-link" href="planos.php">Planos</a>
						  </li>
						  <li class="nav-item nav-link-extra">
							<a class="nav-link" href="depoimentos.php">Depoimentos</a>
						  </li>
						  <li class="nav-item active nav-link-extra">
							<a class="nav-link" href="contato.php">Contato <span class="sr-only">(atual)</span></a>
						  </li>
						  <li class="nav-item nav-link-extra">
							<a class="nav-link" href="sobre.php">Sobre</a>
						  </li>
						</ul>
					  </div>
					</nav>
				</div>
			</div>
			<!-- Fim - NavBar -->
				
			<!-- NavBar History -->
			<div class="row navHistory">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Contato</li>
					  </ol>
					</nav>
				</div>
			</div>
			<!-- Fim - NavBar History -->

			<!-- Contato -->
			<div id="contato" class="row">
					<div class="col-md-12">
						<h2>Contato</h2>
						<hr>
						
						<div class="row">
							<div class="col-md-6">
									<form name="contato" id="contato" action="email.php" method="post">
											<div class="form-group">
												<label for="nome">Nome:</label>
												<input type="mail" class="form-control" id="nome" name="contato[0]" placeholder="Nome">
											</div>
											<div class="form-group">
												<label for="email">Seu e-mail:</label>
												<input type="mail" class="form-control" id="email" name="contato[1]" placeholder="E-mail">
											</div>
											<div class="form-group">
												<label for="assunto">Assunto:</label>
												<input type="text" class="form-control" id="assunto" name="contato[2]" placeholder="Assunto..">
											</div>
											<div class="form-group">
												<label for="mensagem">Mensagem:</label>
												<textarea  class="form-control" id="mensagem" name="contato[3]" rows="5" placeholder="Mensagem.."></textarea>
											</div>
											<button type="submit" class="btn btn-primary">Enviar</button>
										</form>
							</div>
							
							<div class="col-md-6">
								<div id="map"></div>
									<script>
										function initMap() {
											var uluru = {lat: -23.1001099, lng: -48.9635836};
											var map = new google.maps.Map(document.getElementById('map'), {
												zoom: 10,
												center: uluru
											});
											var marker = new google.maps.Marker({
												position: uluru,
												map: map
											});
										}
									</script>
									<script async defer
									src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHcFBzXXbUtaaMoGDYPt3Sik2DSROBaT0&callback=initMap">
									</script>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
									<a href="#" class="btn btn-secondary"><span class="fa fa-phone"></span> Celular: (14) 99720-8435</a>
									<a href="mailto:contato.monstros@gmail.com" class="btn btn-secondary"><span class="fa fa-envelope"></span> E-mail:contato.monstros@gmail.com</a>
									<a href="https://www.facebook.com" class="btn btn-primary"><span class="fa fa-facebook"></span> www.facebook.com/monstrosBirrrll</a>
							</div>
						</div>
						
					</div>
				</div>
				<!-- Fim - Contato -->
				
		</div>
	</body>
</html>