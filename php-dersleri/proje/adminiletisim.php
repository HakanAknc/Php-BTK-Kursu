<?php 
require_once("baglan.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


	<div style=" border:1px  solid black; background-color: lightgray; ">

		<h3>Müşteri İletişim</h3>


		<?php 

		$sorgu = $db->prepare("SELECT * from tblkonu");

		$sorgu->execute();

		$satirlar = $sorgu->fetchALL(PDO::FETCH_ASSOC);

		

		?>

		<hr>

		<h4>Konu Filtreleme</h4>

		<select name="konuid" id="konu_filtre" onchange="goster()">
			<option>Konu Seçiniz</option>
			<?php 
			foreach ($satirlar as $satir) {?>

				<option value="<?php echo $satir['id']; ?>"> <?php echo $satir['konuadi']; ?> </option>
			<?php  }?>              
		</select>


		<br> <br>

		<div id="konu_getir">

			<?php 

			if (isset($_GET["konu"])) {

				$sorgu = $db->prepare("Select
					tbliletisim.id as aid,
					tbliletisim.ad as aad,
					tbliletisim.soyad as asoyad,
					tbliletisim.mail as amail,
					tbliletisim.telefon as atelefon,	
					tbliletisim.konuid as akonuid,
					tbliletisim.mesaj as amesaj,
					tbliletisim.tarih as atarih,
					tblkonu.id as iid,
					tblkonu.konuadi as ikonuadi
					from tbliletisim INNER JOIN tblkonu on tbliletisim.konuid=tblkonu.id

					where tbliletisim.konuid=:konuadi_alias

					order by tbliletisim.id

					");

				$sorgu->execute(array(
					'konuadi_alias' => $_GET["konu"]
				));

			}else {
				$sorgu = $db->prepare("Select
					tbliletisim.id as aid,
					tbliletisim.ad as aad,
					tbliletisim.soyad as asoyad,
					tbliletisim.mail as amail,
					tbliletisim.telefon as atelefon,	
					tbliletisim.konuid as akonuid,
					tbliletisim.mesaj as amesaj,
					tbliletisim.tarih as atarih,
					tblkonu.id as iid,
					tblkonu.konuadi as ikonuadi
					from tbliletisim INNER JOIN tblkonu on tbliletisim.konuid=tblkonu.id

					order by tbliletisim.id
					");

				$sorgu->execute();
			}





			?> 

			<table border="1">
				<tr>
					<th>ID</th>
					<th>MÜŞTERİ ADI</th>
					<th>MÜŞTERİ SOYADI</th>
					<th>MAİL</th>
					<th>TELEFON</th>          
					<th>KONU</th>
					<th>MESAJ</th>
					<th>TARİH</th>
					<th>SİL</th>
				</tr>

				<?php 
				while ($satir = $sorgu->FETCH(PDO::FETCH_ASSOC)){ ?> 

					<tr>
						<td> <?php echo $satir["aid"]; ?></td>
						<td> <?php echo $satir["aad"]; ?></td>
						<td> <?php echo $satir["asoyad"];?></td>
						<td> <?php echo $satir["amail"]; ?></td>
						<td> <?php echo $satir["atelefon"]; ?></td>
						<td> <?php echo $satir["ikonuadi"]; ?></td>
						<td> <?php echo $satir["amesaj"]; ?></td>
						<td> <?php echo $satir["atarih"]; ?></td>
						<td> <a href="mesaj_sil.php?id=<?php echo $satir["aid"]; ?>"><button>Sil</button></a></td>
					</tr>
				<?php }
				?>  
			</table>
		</div>
	</div>

	<script type="text/javascript">
		function goster(){

			var konu = document.getElementById("konu_filtre").value;

			window.location.href = "admin.php?konu="+konu;


		}

	</script>
</body>
</html>
