<?php

    $ad = "Hakan";
    $soyad = "Akinci";
    $yas = 22;

    // $mesaj = "My name is ".$ad.' '.$soyad." and ".$yas." years old.";
    // $mesaj = "my name is {$ad} {$soyad} and {$yas} years old.";
    // $mesaj = "My name is $ad $soyad and $yas years old.";
    //echo $mesaj;

    $mesaj = "My name is $ad $soyad and $yas years old.";
    
    echo $mesaj."<br>";
    echo $mesaj[0]."<br>";  // M
    echo $mesaj[5]."<br>";  // m

    // STRİNG FONKSİYONLARI;
    echo strlen($mesaj)."<br>";   // Toplam karekter sayısını verir.
    echo str_word_count($mesaj)."<br>";  // Toplam kelime sayısınu verir.
    echo strtolower($mesaj)."<br>";    //bütün harfleri küçük harfe çevirir.
    echo strtoupper($mesaj)."<br>";   //bütün harfleri büyük harfe çevirir.
    echo ucfirst($mesaj)."<br>";   //cümlenin baş harfini büyük harf yapar.
    echo str_replace(["Hakan","22"],["Evren","6"],$mesaj);  // yer değiştirir.

?>
