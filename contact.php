<!doctype html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/util.css">

  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">

  <link rel="shortcut icon" href="">
  
  <link href="" rel="canonical">

  <meta name="author" content="">
  <meta name="robots" content="index, follow">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <title></title>

</head>
<body>
    
   <?php include 'templates/header.php'; ?>

   <main class="pt-5">
   		
   		<section id="slides">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="images/slides/01.png" class="d-block w-100 h-550" alt="Slide Image Fusion Security">
			    </div>
			    <div class="carousel-item">
			      <img src="images/slides/02.png" class="d-block w-100 h-550" alt="Slide Image Fusion Security">
			    </div>
			    <div class="carousel-item">
			      <img src="images/slides/03.png" class="d-block w-100 h-550" alt="Slide Image Fusion Security">
			    </div>
			    <div class="carousel-item">
			      <img src="images/slides/04.png" class="d-block w-100 h-550" alt="Slide Image Fusion Security">
			    </div>
			    <div class="carousel-item">
			      <img src="images/slides/05.png" class="d-block w-100 h-550" alt="Slide Image Fusion Security">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
   		</section>

   		<section id="content">
   			<div class="container">

   				<div align="center" class="my-4">
   					<h1 class="display-5">Contato</h1>
   					<div class="line-title"></div>
   				</div>

   				<div class="row">

	   				<div class="col-md-6">

						<form method="POST" action="sendMail.php">

							<label class="mb-0">Nome</label>
							<input type="text" name="name" class="form-control p-4" placeholder="Nome" required>

							<div class="my-3">
								<label class="mb-0">Email</label>
								<input type="email" name="email" class="form-control p-4" placeholder="Email" required>
							</div>

							<div class="mb-4">
								<label class="mb-0">Mensagem</label>
								<textarea name="message" class="form-control p-4" placeholder="Mensagem" required></textarea>
							</div>
							
							<input type="submit" name="send" value="Enviar" class="mb-3 btn btn-warning weight-500">

						</form>

					</div>

					<div class="col-md-6 mt-3">

						<address class="mb-0 fs-18">
							<i class="fa fa-map-marker-alt"></i> 
							Estr. Marechal Miguel Salazar Mendes de Morais N° 946
						</address>

						<div class="d-block my-2">
							<i class="fa fa-phone"></i>	
							<a href="tel:+5521964155238" class="text-dark fs-18">(21) 96415-5238</a>
						</div>
						<div class="d-block">
							<i class="fa fa-envelope"></i> 
							<a href="mailto:" class="text-dark fs-18">fusionsecuritvendas@gmail.com</a>
						</div>

					</div>

				</div>

   			</div>
   		</section>
   	</main>

   	<?php include 'templates/footer.php'; ?>

</body>
</html>