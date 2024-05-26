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

	<?php 

	if (isset($_GET["durum"])) {
		if ($_GET["durum"] == "ok") {
			echo "işlem başarılı";
		} else {
			echo "olmadı";
		}

		
		
		
		
	} 
	?>

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
	<br><br><br><br><br>

	<h3>Bizimle İletişime Geçmek İçin Lütfen Formu Doldurunuz</h3>

	<br><br>
	<div>
		<?php 
		$fotograf = $db->prepare("select * from tblfotograf where id='21'");
		$fotograf->execute(array());
		$foto2=$fotograf->fetchALL(PDO::FETCH_ASSOC);

		foreach ($foto2 as $fotocek) {?>
			<img src="<?php echo $fotocek['foto']; ?>" width="100%" height="100% ">
		<?php } ?>
	</div> 



	<br><br>

	<?php 

	$sorgu = $db->prepare("SELECT * from tblkonu");

	$sorgu->execute();

	$satirlar = $sorgu->fetchALL(PDO::FETCH_ASSOC);

	?>


	<form action="iletisimislem.php" method= "post" >

		<div class="form-group" >
			<label for="name">Adınız</label>
			<input type="text" name="ad"  required=" " class="form-control" placeholder="Adınızı Giriniz">
		</div>
		<div class="form-group">
			<label for="soyad">Soyadınız</label>
			<input type="text" name="soyad" class="form-control" placeholder="Soyadınızı Giriniz" required="">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="mail" name="mail"  class="form-control"placeholder="Email Adresinizi Giriniz" required="">
		</div>

		<div class="form-group">
			<label for="telefon">Telefon Numarası</label>
			<input type="text" name="telefon"  class="form-control" placeholder="Telefon Numaranızı Giriniz" required="">
		</div>

		<div class="form-group">
			<label for="konu">Mesaj Konusu</label>
			<select class="form-control" name="konuadi">
				<?php 
				foreach ($satirlar as $satir) {?>
					<option value="<?php echo $satir['id']; ?>"><?php echo $satir['konuadi']; ?> </option>
				<?php  }?>				
			</select>			
		</div>

		<div class="form-group">
			<label for="message">Mesaj</label>
			<textarea type="text" name="mesaj" required="" rows="5" class="form-control" placeholder="Mesajınızı Giriniz"></textarea>
		</div>
		<center>
			<button type="submit" name="iletisim"class="btn btn-default" onclick="popUp()">Gönder</button>
		</center>
	</form>

	<br><br><br><br>

	<footer class="py-5 bg-dark text-white text-center" class="w-75 mx-auto my-4 " >
		Ali Kolukırık | 2021
	</footer>

	<script>
		function popUp(){
			alert("Mesajınız Başarıyla Gönderilmiştir");
		}
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



</body>
</html>