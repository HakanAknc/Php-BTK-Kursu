<?php 

require_once("baglan.php");


$sorgu=$db->prepare("SELECT * from tblmusteri where id=:id_alias");

$sorgu->execute(array('id_alias'=>$_GET['id']));

$kayit=$sorgu->FETCH(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>	
	<title> Müşteri Güncelleme</title>
</head>
<body>
	<h2>Müşteri Güncelleme</h2>

	<?php 
		$sorgu = $db->prepare("SELECT * from tblil");
		$sorgu->execute();
		$satirlar = $sorgu->fetchALL(PDO::FETCH_ASSOC);
	?>
		
	<form action="adminislem.php" method= "post" >
		<input type="text" name="ad"  required=" " placeholder="Müşteri Adı" value=" <?php echo $kayit['ad'] ?>">
		<input type="text" name="soyad"  required=" " placeholder="Müşteri Soyadı" value=" <?php echo $kayit['soyad'] ?>">
		<input type="text" name="tckn"  required=" " placeholder="TCKN" value=" <?php echo $kayit['tckn'] ?>">
		<input type="text" name="telefon"  required=" " placeholder="Telefon" value=" <?php echo $kayit['telefon'] ?>">
		<input type="mail" name="mail"  required=" " placeholder="Mail" value=" <?php echo $kayit['mail'] ?>">
		<input type="text" name="adres"  required=" " placeholder="Adres" value=" <?php echo $kayit['adres'] ?>">
		<select name="sehir">
				<?php 
				foreach ($satirlar as $satir) {?>
					<option value="<?php echo $satir['id']; ?>"> <?php echo $satir['sehir']; ?> </option>
				<?php  }?>				
			</select>
		<input type="submit" name="musteriguncellemeislemi" value="kaydet">
		<input type="text" name="id" hidden="" value="<?php echo $kayit['id'] ?>">
	</form>
	<br>
</body>
</html>