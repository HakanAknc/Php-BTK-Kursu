<?php 

require_once("baglan.php");

?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<link rel="stylesheet" href="style.css">

	<title>Eflatun Photography</title>
</head>
<body class="w-75 mx-auto my-4">

	<nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
		<div class="container">
			<a href="main.php" class="navbar-brand">
				<div>
					<?php 
					$fotograf = $db->prepare("select * from tblfotograf where id='8'");
					$fotograf->execute(array());
					$foto2=$fotograf->fetchALL(PDO::FETCH_ASSOC);

					foreach ($foto2 as $fotocek) {?>
						<img src="<?php echo $fotocek['foto']; ?>" width="200" height="80">
					<?php } ?>
				</div> 
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="foto.php" class="nav-link active">
							Fotoğraflar
						</a>
					</li>
					<li class="nav-item">
						<a href="vid.php" class="nav-link active">
							Videolar
						</a>
					</li>
					<li class="nav-item">
						<a href="hak.php" class="nav-link active">
							Hakkımızda
						</a>
					</li>
					<li class="nav-item">
						<a href="paketlerimiz.php" class="nav-link active">
							Paketlerimiz
						</a>
					</li>
					<li class="nav-item">
						<a href="iletisim.php" class="nav-link active">
							İletişim
						</a>
					</li>
					<li class="nav-item">	
					</li>
					<li class="nav-item">
						<a href="uye.php" class="nav-link active">
							Üye İşlemleri
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<br>
	<br><br><br>

	<br><br>
	<hr>
	<br><br>

	<div class="row">
		<div class="col-md-4" >
			<div class="card">
				<center>
					<img src="img/dugun.jpg" width="100%" height="100%" >
				</center>
				<div class="card-body">
					<h4 class="card-title" align="center">Düğün Çekimi</h4>
					<hr>
					<p class="card-text">
						<center>
							<a class="btn btn-link">1500₺</a>
						</center>
					</div>
				</div>
			</div>

			<div class="col-md-4" >
				<div class="card">
					<center>
						<img src="img/nisan.jpg" width="100%" height="100%" >
					</center>
					<div class="card-body">
						<h4 class="card-title" align="center">Nişan Çekimi</h4>
						<hr>
						<center>
							<a  class="btn btn-link">750₺</a>
						</center>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<center>
						<img src="img/sunnet.jpg" width="100%" height="100%" >
					</center>
					<div class="card-body">
						<h4 class="card-title" align="center">Sünnet Çekimi</h4>
						<hr> 
						<center>
							<a  class="btn btn-link">750₺</a>
						</center>						
					</div>
				</div>
			</div>
		</div>

		<br><br>

		<br><br><br>
		<div class="row">
			<div class="col-md-4" >
				<div class="card">
					<center>
						<img src="img/bebek.jpg" width="100%" height="100%" >
					</center>
					<div class="card-body">
						<h4 class="card-title" align="center">Bebek Çekimi</h4>
						<hr>
						<p class="card-text">
							<center>
								<a class="btn btn-link">500₺</a>
							</center>
						</div>
					</div>
				</div>

				<div class="col-md-4" >
					<div class="card">
						<center>
							<img src="img/urun.jpg" width="100%" height="100%" >
						</center>
						<div class="card-body">
							<h4 class="card-title" align="center">Ürün Çekimi</h4>
							<hr>
							<center>
								<a  class="btn btn-link">2500₺</a>
							</center>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
						<center>
							<img src="img/tanitim.jpg" width="100%" height="100%" >
						</center>
						<div class="card-body">
							<h4 class="card-title" align="center">Tanıtım Çekimi</h4>
							<hr> 
							<center>
								<a  class="btn btn-link">5000₺</a>
							</center>						
						</div>
					</div>
				</div>
			</div>








			<br><br>
			<hr>
			<br><br>

			<footer class="py-5 bg-dark text-white text-center" class="w-75 mx-auto my-4 " >
				Ali Kolukırık | 2021
			</footer>


			<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


		</body>
		</html>