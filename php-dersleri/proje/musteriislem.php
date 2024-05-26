<?php 

require_once("baglan.php");

if (isset($_POST["musterikayitislemi2"])) {

	$kaydet = $db->prepare("INSERT INTO tblmusteri set
		ad=:ad_alias,
		soyad=:soyad_alias,
		tckn=:tckn_alias,
		telefon=:telefon_alias,
		mail=:mail_alias,
		adres=:adres_alias,
		ilid=:ilid_alias");

	$insert = $kaydet -> execute(array(
		'ad_alias' => $_POST["ad"],
		'soyad_alias' => $_POST["soyad"],
		'tckn_alias' => $_POST["tckn"],
		'telefon_alias' => $_POST["telefon"],
		'mail_alias' => $_POST["mail"],
		'adres_alias' => $_POST["adres"],
		'ilid_alias' => $_POST["sehir"]));

	if ($insert) {
		Header("location: musteri.php?durum=ok");
	} else {
		Header("location: musteri.php?durum=no");
	}
}
?>