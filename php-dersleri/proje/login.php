<?php

session_start();

  require_once("baglan.php");

  $kadi = $_POST['kullaniciadi'];
  $sifre = $_POST['sifre'];

  if(!$kadi || !$sifre)
  {
    die("!");
  }

  $user = $db->query("SELECT * FROM tbluye WHERE kullaniciadi='$kadi' and sifre='$sifre'")->fetch();

  if($user)
  {
    $_SESSION['user'] = $user;
   echo "<script type='text/javascript'>alert('Giriş Yapılıyor.');</script>";
    header("refresh:0.4; url=musteri.php");
  }
  else
  {
    echo "<script type='text/javascript'>alert('Giriş Bilgilerinizi Kontrol Ediniz.');</script>";
    header("refresh:0.4; url=uye.php");
  }


?>