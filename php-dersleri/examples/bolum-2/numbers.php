<?php
    
    $sayi1 = 5;
    $sayi2 = 3;

    echo "sonuç: ".($sayi1+$sayi2)."<br>";
    echo "sonuç: ".($sayi1-$sayi2)."<br>";
    echo "sonuç: ".($sayi1*$sayi2)."<br>";
    echo "sonuç: ".($sayi1/$sayi2)."<br>";

    $sayi3 = 8;

    echo "sonuç: ".(($sayi1+$sayi2)/$sayi3)."<br>";

    echo var_dump(is_int(5))."<br>";       // sayının int olup olmadığını boolean ile kontrol eder
    echo var_dump(is_int(5.2))."<br>";

    echo var_dump(is_float(5))."<br>";   // sayının float olup olmadığın kontrol eder.
    echo var_dump(is_float(5.2))."<br>";

    echo var_dump(is_numeric("a5"))."<br>";    // sayının gerçek bir sayı olup olmadığını kontrol eder.

    echo abs(-10)."<br>";    // mutlak değer
    echo ceil(4.3)."<br>";   // sayıyı her zaman yukarıya yuvarlar
    echo ceil(4.8)."<br>";   // sayıyı her zaman yukarıya yuvarlar
    echo floor(4.8)."<br>";  // sayıyı her zaman aşağaya yuvarlar
    echo round(4.8)."<br>";  // sayıyı her zaman en yakın sayıya yuvarlar
    echo round(4.4)."<br>";  // sayıyı her zaman en yakın sayıya yuvarlar

    echo sqrt(25)."<br>";   // karekök alır
    echo pow(5,2)."<br>";   // üs alır 
    echo max(3,5,6,90)."<br>";   // en büyük değeri bulur
    echo min(3,5,6,90)."<br>";   // en küçük değeri bulur

?>