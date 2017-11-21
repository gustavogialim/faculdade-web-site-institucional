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
		<meta name="author" content="Gustavo Gialim, Guilherme Felipe, Vinicius Novello, Vinicius Brick">
		<meta name="description" content="Monstros - Saiu de casa e comeu pra caramba? Então aqui é seu lugar!">
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
						  <li class="nav-item active nav-link-extra">
							<a class="nav-link" href="#">Home <span class="sr-only">(atual)</span></a>
						  </li>
						  <li class="nav-item nav-link-extra">
							<a class="nav-link" href="planos.php">Planos</a>
						  </li>
						  <li class="nav-item nav-link-extra">
							<a class="nav-link" href="depoimentos.php">Depoimentos</a>
						  </li>
						  <li class="nav-item nav-link-extra">
							<a class="nav-link" href="contato.php">Contato</a>
						  </li>
						  <li class="nav-item nav-link-extra">
							<a class="nav-link" href="sobre.php">Sobre</a>
						  </li>
						</ul>

						<form id="login" class="form-inline">
							<div class="form-group">
								<label class="sr-only" for="email">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label class="sr-only" for="senha">Senha</label>
								<input type="password" class="form-control" id="senha" placeholder="Senha">
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary">Logar</button>
							</div>
						</form>

					  </div>
					</nav>
				</div>
			</div>
			<!-- Fim - NavBar -->
			
			<!-- Carrousel -->
			<div id="carounselIndex" class="row">

				<div class="col-md-12 no-padding">
					<div id="carouselG" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
						<li data-target="#carouselG" data-slide-to="0" class="active"></li>
						<li data-target="#carouselG" data-slide-to="1"></li>
						<li data-target="#carouselG" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <img class="d-block w-100" src="imgs/b1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="imgs/b2.png" alt="Second slide">
						</div>
						<div class="carousel-item">
						  <img class="d-block w-100" src="imgs/b3.jpg" alt="Third slide">
						  <div class="carousel-caption d-none d-md-block">
							<h3>Materiais de Ponta</h3>
							<p>Os materiais e equipamentos mais atuais do mercado.</p>
						  </div>
						</div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselG" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselG" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
			<!-- Fim - Carrousel -->
			
			<!-- Serviços -->
			<div id="servicos" class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<h2 class="title-h2"> Nossos Serviços </h2>
							<hr/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="card">
							  <img class="card-img-top" src="imgs/musculacao.jpg" alt="Card image cap">
							  <div class="card-body">
								<h4 class="card-title">Musculação</h4>
								<p class="card-text">Os melhores equipamentos para deixar de ser um frango.</p>
								<a href="servico-musculacao.php" class="btn btn-primary">Saiba Mais</a>
							  </div>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="card">
							  <img class="card-img-top" src="imgs/crosfit.jpg" alt="Card image cap">
							  <div class="card-body">
								<h4 class="card-title">Crossfit</h4>
								<p class="card-text">Percorra nossos circuitos crossfit e fique como um crackudo.</p>
								<a href="#" class="btn btn-primary">Saiba Mais</a>
							  </div>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="card">
							  <img class="card-img-top" src="imgs/pilates.jpg" alt="Card image cap">
							  <div class="card-body">
								<h4 class="card-title">Pilates</h4>
								<p class="card-text">Sinta seu corpo virar um elástico com nossos exercícios.</p>
								<a href="#" class="btn btn-primary">Saiba Mais</a>
							  </div>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="card">
							  <img class="card-img-top" src="imgs/ducha.jpg" alt="Card image cap">
							  <div class="card-body">
								<h4 class="card-title">Ducha</h4>
								<p class="card-text">Tome um banho para não sair na rua fedido após puxar muitos ferros.</p>
								<a href="#" class="btn btn-primary">Saiba Mais</a>
							  </div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- Fim - Serviços -->

			<!-- IMC -->
			<div id="imc" class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<h2 class="title-h2"> Calcule seu IMC </h2>
							<hr/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<form name="imc" id="imc">
								<div class="form-group">
									<label for="peso">Peso</label>
									<input type="text" class="form-control" name="peso" id="peso" placeholder="Peso">
								</div>
								<div class="form-group">
									<label for="altura">Altura</label>
									<input type="text" class="form-control" name="altura" id="altura" placeholder="Altura">
								</div>
								<a href="#imc" class="btn btn-primary" onclick="calcularIMC()">Calcular</a>
							</form>

							<div id="result" class="alert alert-success" role="alert">
								<strong>Calculado!</strong> Seu IMC é 18, confira a tabela ao lado para saber sua situação!
							</div>
						</div>
						
						<div class="col-md-6">
								<table class="table"> 
										<thead> 
											<tr> 
												<th>Resultado</th> 
												<th>Situação</th> 
											</tr> 
										</thead> 
										<tbody> 
											<tr id="imcOption1"> 
												<td>Abaixo de 17</td> 
												<td>Muito abaixo do <em>peso</em></td> 
											</tr> 
											<tr id="imcOption2"> 
												<td>Entre 17 e 18,49</td> 
												<td>Abaixo do <em>peso</em></td> 
											</tr> 
											<tr id="imcOption3"> 
												<td>Entre 18,5 e 24,99</td> 
												<td><em>Peso</em> normal</td> 
											</tr> 
											<tr id="imcOption4"> 
												<td>Entre 25 e 29,99</td> 
												<td>Acima do <em>peso</em></td> 
											</tr> 
											<tr id="imcOption5"> 
												<td>Entre 30 e 34,99</td> 
												<td><em>Obesidade</em> I</td> 
											</tr> 
											<tr id="imcOption6"> 
												<td>Entre 35 e 39,99</td> 
												<td><em>Obesidade</em> II (severa)</td> 
											</tr> 
											<tr id="imcOption7"> 
												<td>Acima de 40</td> 
												<td><em>Obesidade</em> III (mórbida)</td> 
											</tr> 
										</tbody> 
									</table>
						</div>
				</div>
			</div>
				
			</div>
			<!-- Fim - IMC -->

			<!-- Frango -->
			<div class="row">
					<div class="col-md-12">
							<div class="jumbotron">
								<h1 class="display-3">Jamais Frango!</h1>
								<p class="lead">Jamais volte a ser frango esse é o nosso lema. Seu corpo chegará ao seu pontencial máximo.</p>
								<hr class="m-y-2">
								<p>Saiba mais sobre nossa academia e venha logo pra cá.</p>
								<p class="lead">
									<a class="btn btn-success btn-lg" href="sobre.php" role="button">Saiba mais</a>
								</p>
							</div>
					</div>
				</div>
				<!-- Fim - Frango -->

			<!-- Rodap� -->
			<div id="rodape" class="row">
				<div class="col-md-12">
					
					<div class="row">
						<!-- Redes Sociais -->
						<div class="col-md-6 social-buttons">
							<div class="row">
								<div class="col-md-12">
									<h2 class="title-h2 text-center"> Redes Sociais </h2>
									<hr>
								</div>
							</div>
							<div class="row">
								<div id="socials" class="col-md-12">
									<div class="socialsBtn">
										<a href="https://www.facebook.com" class="btn btn-block btn-social btn-facebook">
											<span class="fa fa-facebook"></span> Página no Facebook
										</a>
										
										<a href="https://www.google.com.br" class="btn btn-block btn-social btn-google">
											<span class="fa fa-google"></span> Perfil no Google
										</a>
										
										<a href="https://www.instagram.com" class="btn btn-block btn-social btn-instagram">
											<span class="fa fa-instagram"></span> Nosso Instagran
										</a>
										
										<a href="https://www.twitter.com" class="btn btn-block btn-social btn-twitter">
											<span class="fa fa-twitter"></span> Siga-nos no Twitter
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Fim - Redes Sociais -->
						
						<!-- Developers -->
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">
										<h2 class="title-h2 text-center"> Desenvolvedores </h2>
										<hr>
									</div>
								</div>
								<div class="row">
									<div id="developers" class="col-md-12">
										<div class="developersContent">
											<ul>
												<li>Gustavo Gialim</li>
												<li>Guilherme Felipe</li>
												<li>Vinicius Novello</li>
												<li>Vinicius Brick</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						
					</div>
				</div>
			</div>
			<!-- Fim - Rodap� -->
			
		</div>
	</body>
</html>