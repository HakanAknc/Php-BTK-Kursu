<?php 

require_once("baglan.php");

if (isset($_POST["musterikayitislemi"])) {

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
		Header("location: admin.php?durum=ok");
	} else {
		Header("location: admin.php?durum=no");
	}
}


if (isset($_POST["musteriguncellemeislemi"])) {

	$sorgu = $db->prepare("UPDATE tblmusteri set
		ad=:ad_alias,
		soyad=:soyad_alias,
		tckn=:tckn_alias,
		telefon=:telefon_alias,
		mail=:mail_alias,
		adres=:adres_alias,
		ilid=:ilid_alias
		where id={$_POST['id']}"
	);

	$guncelle=$sorgu->execute(array(
		'ad_alias' => $_POST["ad"],
		'soyad_alias' => $_POST["soyad"],
		'tckn_alias' => $_POST["tckn"],
		'telefon_alias' => $_POST["telefon"],
		'mail_alias' => $_POST["mail"],
		'adres_alias' => $_POST["adres"],
		'ilid_alias' => $_POST["sehir"]
	));

	if ($guncelle) {
		Header("location: admin.php?durum=ok");
	} else {
		Header("location: admin.php?durum=no");
	}
}

if (isset($_POST["musterisatinalmaislemi"])) {

	$kaydet = $db->prepare("INSERT INTO tblsatinal set
		id=:id_alias,
		cekimturuid=:cekimturuid_alias,
		fiyatid=:fiyatid_alias,	
		cekimtarihi=:cekimtarihi_alias,
		cekimyeri=:cekimyeri_alias,
		odemeid=:odemeid_alias,
		kategoriid=:kategoriid_alias");

	$insert = $kaydet -> execute(array(
		'id_alias' => $_POST["id"],
		'cekimturuid_alias' => $_POST["cekimturu"],
		'fiyatid_alias' => $_POST["fiyatid"],
		'cekimtarihi_alias' => $_POST["cekimtarihi"],
		'cekimyeri_alias' => $_POST["sehir"],
		'odemeid_alias' => $_POST["odemeturu"],
		'kategoriid_alias' => $_POST["kategoriadi"]));

	if ($insert) {
		Header("location: admin.php?durum=ok");
	} else {
		Header("location: admin.php?durum=no");
	}
}

if (isset($_POST["musterisatinalmaislemi2"])) {

	$kaydet = $db->prepare("INSERT INTO tblsatinal set
		id=:id_alias,
		cekimturuid=:cekimturuid_alias,
		fiyatid=:fiyatid_alias,	
		cekimtarihi=:cekimtarihi_alias,
		cekimyeri=:cekimyeri_alias,
		odemeid=:odemeid_alias,
		kategoriid=:kategoriid_alias
		");

	$insert = $kaydet -> execute(array(
		'id_alias' => $_POST["id"],
		'cekimturuid_alias' => $_POST["cekimturu"],
		'fiyatid_alias' => $_POST["fiyatid"],
		'cekimtarihi_alias' => $_POST["cekimtarihi"],
		'cekimyeri_alias' => $_POST["sehir"],
		'odemeid_alias' => $_POST["odemeturu"],
		'kategoriid_alias' => $_POST["kategoriadi"]));

	if ($insert) {
		Header("location: musteri.php?durum=ok");
	} else {
		Header("location: musteri.php?durum=no");
	}
}

if (isset($_POST["musterisatinalmaguncellemeislemi"])) {

	$kaydet = $db->prepare("UPDATE tblsatinal set		
		cekimturuid=:cekimturuid_alias,				
		fiyatid=:fiyatid_alias;
		cekimtarihi=:cekimtarihi_alias,
		cekimyeri=:cekimyeri_alias,
		odemeid=:odemeid_alias,
		kategoriid=:kategoriid_alias
		where id={$_POST['id']}"
	);

	$insert = $kaydet -> execute(array(		
		'cekimturuid_alias' => $_POST["cekimturu"],
		'fiyatid_alias' => $_POST["fiyat"],		
		'cekimtarihi_alias' => $_POST["cekimtarihi"],
		'cekimyeri_alias' => $_POST["sehir"],
		'odemeid_alias' => $_POST["odemeturu"],
		'kategoriid_alias' => $_POST["kategoriadi"]
	));

	if ($insert) {
		Header("location: admin.php?durum=ok");
	} else {
		Header("location: admin.php?durum=no");
	}
}



?>