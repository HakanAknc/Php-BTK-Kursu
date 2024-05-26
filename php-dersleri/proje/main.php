<?php 

require_once("baglan.php");
?>

<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<link rel="stylesheet" href="style.css">



	<title>Eflatun Photography</title>


</head>


<body class="w-75 mx-auto my-4" >



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



	<div id="carouselExampleControls"  class="carousel slide" data-ride="carousel " >
		<div class="carousel-inner">
			<div class="carousel-item active" align="center">

				<div>
					<?php 
					$fotograf = $db->prepare("select * from tblfotograf where id='3'");
					$fotograf->execute(array());
					$foto2=$fotograf->fetchALL(PDO::FETCH_ASSOC);

					foreach ($foto2 as $fotocek) {?>
						<img src="<?php echo $fotocek['foto']; ?>" width="100%" height="100%">
					<?php } ?>
				</div> 
				
			</div>
			<div class="carousel-item" align="center">
				<div>
					<?php 
					$fotograf = $db->prepare("select * from tblfotograf where id='2'");
					$fotograf->execute(array());
					$foto2=$fotograf->fetchALL(PDO::FETCH_ASSOC);

					foreach ($foto2 as $fotocek) {?>
						<img src="<?php echo $fotocek['foto']; ?>" width="100%" height="100%">
					<?php } ?>
				</div> <img src="img/2.jpg" width="100%" height="100%">
				
			</div>
			<div class="carousel-item" align="center">

				<div>
						<?php 
						$fotograf = $db->prepare("select * from tblfotograf where id='1'");
						$fotograf->execute(array());
						$foto2=$fotograf->fetchALL(PDO::FETCH_ASSOC);

						foreach ($foto2 as $fotocek) {?>
							<img src="<?php echo $fotocek['foto']; ?>" width="100%" height="100%">
						<?php } ?>
					</div> 

			</div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" >
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" >
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
	</div>

	<br><br><br>

	


	<div class="card my-3  " >
		<div class="card-body">
			<h2 class="card-title" align="center">
				Mutluluğunuz Mutluluğumuzdur..
			</h2>
			<p class="card-text">
				Biliyoruz ki, düğün fotoğrafçısını bulmak düğün hazırlıklarında hafife alınmayacak bir basamak. Belki de doğru fotoğrafçıyı bulmak en zor işlerden birisi.
				Canlı, göz alıcı, yaşanmış ve güzel fotoğraflar sözcüklerin anlatabileceğinden daha fazlasını ifade ederler. İnanıyoruz ki, bütün planlarınız arasında vereceğiniz en önemli kararlardan birisi de budur.Bizler de evliliğin en güzel günü olan düğün gününüzü alışılmışın dışında, estetik kareler, yaratıcı detaylar ve spontane anlar ile baştan sona belgesel tarzda fotoğraflayarak ölümsüzleştiriyoruz. Çünkü büyük bir özen ve titizlikle çekilmiş fotoğraflarınız geriye dönüp baktığınızda yaşanmış en güzel gününüzü tüm tazeliği ve canlılığı ile sizlere geri getirip aynı duyguları yaşamanızı sağlayacaktır.
				<br><br>
				<span>Biz kimiz...</span>
				
			</p> <center>
				<a href="hak.php" class="btn btn-secondary">Hakkımızda</a>
			</center>
			
		</div>
	</div>

	<br><br><br>


	<div align="center">
		<h2>Düğün Fotoğraflarımız</h2>
	</div>
	<br><br>

	<div class="row  ">
		<div class="col-md-4">
			<div class="card">
				<center>
					<div>
						<?php 
						$fotograf = $db->prepare("select * from tblfotograf where id='7'");
						$fotograf->execute(array());
						$foto2=$fotograf->fetchALL(PDO::FETCH_ASSOC);

						foreach ($foto2 as $fotocek) {?>
							<img src="<?php echo $fotocek['foto']; ?>" width="100%" height="100%">
						<?php } ?>
					</div> 
				</center>
				<div class="card-body">
					<h4 class="card-title" align="center">Ayşenur & Safa</h4>
					<hr>
					<p class="card-text">
					Malatya'da yapmış olduğumuz eğlence ve sevgi dolu çiftimizin fotoğrafları</p>
					<hr> <center><a href="foto.php" class="btn btn-secondary">Fotoğraflara git</a></center>
					
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<center>
					<div>
						<?php 
						$fotograf = $db->prepare("select * from tblfotograf where id='5'");
						$fotograf->execute(array());
						$foto2=$fotograf->fetchALL(PDO::FETCH_ASSOC);

						foreach ($foto2 as $fotocek) {?>
							<img src="<?php echo $fotocek['foto']; ?>" width="100%" height="100%">
						<?php } ?>
					</div> 
				</center>
				<div class="card-body">
					<h4 class="card-title" align="center">İrem & Berkan</h4>
					<hr>
					<p class="card-text">
					Çok değerli arkadaşım Berkan ve İrem için Eskişhir'de yapmış olduğumuz çekim </p>
					<hr> <center><a href="foto.php" class="btn btn-secondary">Fotoğraflara git</a></center>
					
				</div>
			</div>
		</div>

		<div class="col-md-4">

			<div class="card">
				<center>
					<div>
						<?php 
						$fotograf = $db->prepare("select * from tblfotograf where id='6'");
						$fotograf->execute(array());
						$foto2=$fotograf->fetchALL(PDO::FETCH_ASSOC);

						foreach ($foto2 as $fotocek) {?>
							<img src="<?php echo $fotocek['foto']; ?>" width="100%" height="100%">
						<?php } ?>
					</div> 
				</center>
				<div class="card-body">
					<h4 class="card-title" align="center">Elif & Mustafa</h4>
					<hr>
					<p class="card-text">
					Bursa'da yapmış olduğumuz aşk dolu ve tablo kadar güzel olan bir seri </p>
					<hr> <center><a href="foto.php" class="btn btn-secondary">Fotoğraflara git</a></center>
					
				</div>
			</div>
		</div>

	</div>

	<br><br><br>

	<br><br><br><br>

	<footer class="py-5 bg-dark text-white text-center" class="w-75 mx-auto my-4 " >
		Ali Kolukırık | 2021
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>