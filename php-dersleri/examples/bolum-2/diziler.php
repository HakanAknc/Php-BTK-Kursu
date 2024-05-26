<?php
    // Dizileri (Array)

    // 1-Numeric Arrays
    $renk1 = "Kırmızı";
    $renk2 = "Mavi";
    $renk3 = "Sarı";

    // $renkler = "Kırmızı,Mavi,Sarı";
    $renkler = array("Kırmızı","Mavi","Sarı");

    echo gettype($renkler)."<br>";
    echo $renkler[0]."<br>";
    echo $renkler[1]."<br>";

    $sayilar = array(18,25,32,45,49);

    echo $sayilar[0]."<br>";
    echo $sayilar[1]."<br>";
?>