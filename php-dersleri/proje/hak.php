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

	<div align="center">
		<?php 
		$fotograf = $db->prepare("select * from tblfotograf where id='4'");
		$fotograf->execute(array());
		$foto2=$fotograf->fetchALL(PDO::FETCH_ASSOC);

		foreach ($foto2 as $fotocek) {?>
			<img src="<?php echo $fotocek['foto']; ?>" width="20%" height="20%"">
		<?php } ?>
	</div> 
	<br>

	

	<h2 align="center">Ali Kolukırık </h2>
	<br> <br> <br>

	<h3 align="left">Ali Kolukırık Kimdir? </h3>
	<hr>
	
	<div>
		Ailenin üçüncü çocuğu olarak Malatya'da dünyaya geldim. İlk ve ortaokul eğitimimi Eskişehir, Lise öğrenimimi İzmir ve halen öğrencisi olmaya devam ettiğim Necmettin Erbakan Üniversitesinde "Yönetim Bilişim Sistemleri" bölümünü okumaktayım. 2013 yılından beri aktif olarak fotoğrafçılık sektöründe bulunmakta, 2017 yılından bu yana bu işi profesyonel anlamda ilerletmekteyim. Şu an genellikle Portre, Hikaye Düğün Fotoğrafçılığı ve Moda Çekimleri yapmaktayım. Bunların yanı sıra Sokak Fotoğrafçılığı vazgeçemediğim bir alandır.
	</div>

	<br><br><br>

	<h3 align="left">Nasıl Fotoğrafçı Oldum? </h3>
	<hr>
	
	<div>
		Lise zamanlarımda bu işe merak sararak, o zamanki harçlıklarımı biriktirerek  ve aileminde yardımı ile ilk fotoğraf makinemi aldım. Ardından ardı arkası kesilmeyen bi keşfetme serüvenin içinde buldum kendimi. 4 yıllık amatör fotoğrafçılığımın ardından yaklaşık 4 yıldırda profesyonel olarak bu işi yapmaktayım. 
	</div>



	<br><br><br><br><br><br>
	



	<footer class="py-5 bg-dark text-white text-center" class="w-75 mx-auto my-4 " >
		Ali Kolukırık | 2021
	</footer>



	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



</body>
</html>