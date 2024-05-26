<?php

session_start();

  require_once("baglan.php");

  $kadi = $_POST['ad'];
  $sifre = $_POST['sifre'];

  if(!$kadi || !$sifre)
  {
    die("!");
  }

  $user2 = $db->query("SELECT * FROM tbladmin WHERE ad='$kadi' and sifre='$sifre'")->fetch();

  if($user2)
  {
    $_SESSION['user2'] = $user2;
   echo "<script type='text/javascript'>alert('Giriş Yapılıyor.');</script>";
    header("refresh:0.4; url=admin.php");
  }
  else
  {
    echo "<script type='text/javascript'>alert('Giriş Bilgilerinizi Kontrol Ediniz.');</script>";
    header("refresh:0.4; url=uye.php");
  }


?>