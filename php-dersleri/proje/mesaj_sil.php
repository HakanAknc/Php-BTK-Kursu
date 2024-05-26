<?php 

require_once("baglan.php");

$sorgu =  $db-> prepare("DELETE from tbliletisim where id=:id_alias");

$sil = $sorgu->execute(array('id_alias' => $_GET['id']));

if ($sil) {
		Header("location: admin.php?durum=ok");
		
	} else {
		Header("location: admin.php?durum=no");
	}
 ?>