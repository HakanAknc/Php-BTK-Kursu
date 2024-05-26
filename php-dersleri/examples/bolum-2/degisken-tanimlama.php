<?php
    $ad = "Hakan";
    $soyad = "Akinci";

    //echo $ad $soyad      => değişkenler arasında boşluk bırakılmaz 
    echo $ad." ".$soyad;

    echo "<br>";

    $sayi1 = 50;
    $sayi2 = 100;

    // Tanımlanan aynı skop yani aynı kapsam içersinde başka bir değişken varsa
    // o değişken içeriğini ezmiş oluruz.
    //$sayi1 = 60;

     /*
        $sayi 1 = 60;   => Yanlış
        Değişken isminde boşluk karakteri olamaz.
    */

    /*
        $1sayi = 50;
        Değişken sayı ile başlayamaz.
    */

    // Büyük küçük harf duyarlılığı vardır.
    $Sayi1 = 60;

    // Türkçe karakter kullanmayınız.
    
    echo $sayi1.' '.$sayi2;
?>