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
<body class="w-auto p-3">
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

	
	

	<form action="login.php" method="POST">

		<?php
		session_start();
		if(isset($_SESSION['user']))
		{

			echo "";
		}
		else
		{
			echo "";
		}
		?>

		
		<div align="center">
			<h3>Üye Girişi</h3>
			<form >
				<table>
					<tr>
						<td>
							<input type="text" name="kullaniciadi"placeholder="Kullanıcı Adı" required="">
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="sifre" placeholder="Şifre" required="">
						</td>
					</tr>
					<tr align="center">
						<td>
							<br>
							<input type="submit" name="" placeholder="Şifre" required="">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</form>

	<hr>

	<h3>Üye Kayıt</h3>

	<form action="uye.php" method="POST">
		<div align="center">
			<form >
				<table>
					<tr>
						<td>
							<input type="text" name="kullaniciadi"placeholder="Kullanıcı Adı" required="">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="eposta" placeholder="Eposta" required="">
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="sifre" placeholder="Şifre" required="">
						</td>
					</tr>
					<tr align="center">
						<td> <br>
							<input type="submit" name="kayit_ekle" placeholder="Şifre" required="">
							<br>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</form>

	<hr>

	<h3>Admin Girişi</h3>
	

	<form action="login2.php" method="POST">

		<?php
		session_start();
		if(isset($_SESSION['user2']))
		{

			echo "";
		}
		else
		{
			echo "";
		}
		?>


		<div align="center">
			<form >
				<table>
					<tr>
						<td>
							<input type="text" name="ad" placeholder="Kullanıcı Adı" required="">
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="sifre" placeholder="Şifre" required="">
						</td>
					</tr>
					<tr align="center">
						<td> <br>
							<input type="submit" name="" placeholder="Şifre" required="">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</form>

	<?php 

	require_once("baglan.php");


	if($_POST)
	{
		$uye_kullanici_adi = $_POST['kullaniciadi'];
		$uye_eposta = $_POST['eposta'];
		$uye_sifre = $_POST['sifre'];
		

		if($uye_kullanici_adi =="" || $uye_eposta =="" || $uye_sifre=="")
		{
			echo " ";
		}
	} 

	if(isset($_POST["kayit_ekle"]))
	{

		$kaydet = $db->prepare("INSERT INTO tbluye set
			kullaniciadi=:kullaniciadi_alias,
			eposta=:eposta_alias,
			sifre=:sifre_alias
			");

		$insert = $kaydet->execute(array(
			'kullaniciadi_alias'=>$_POST["kullaniciadi"],
			'eposta_alias'=>$_POST["eposta"],
			'sifre_alias'=>$_POST["sifre"]
			
		));

		if($insert)
		{
			echo "<script type='text/javascript'>alert('Kayıt İşeleminiz Gerçekleştirildi.');</script>";
		}
		else
		{
			echo "tekrar deneyiniz";
		}
	}
	?>



	<br><br><br><br>

	<footer class="py-5 bg-dark text-white text-center" class="w-75 mx-auto my-4 " >
		Ali Kolukırık | 2021
	</footer>

	<script>
		function popUp(){
			//alert("Mesajınız Başarıyla Gönderilmiştir");
		}
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>