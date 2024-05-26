<?php 
require_once("baglan.php");

if (isset($_POST["iletisim"])) {

	$kaydet = $db->prepare("INSERT INTO tbliletisim set
		ad=:ad_alias,
		soyad=:soyad_alias,
		mail=:mail_alias,
		telefon=:telefon_alias,	
		konuid=:konuid_alias,	
		mesaj=:mesaj_alias");

	$insert = $kaydet -> execute(array(
		'ad_alias' => $_POST["ad"],
		'soyad_alias' => $_POST["soyad"],
		'mail_alias' => $_POST["mail"],
		'telefon_alias' => $_POST["telefon"],
		'konuid_alias' => $_POST["konuadi"],
		'mesaj_alias' => $_POST["mesaj"]));

	if ($insert) {
		Header("location: iletisim.php?durum=ok");
	} else {
		Header("location: iletisim.php?durum=no");
	}
}

?>