<?php
    /*  
        +       Toplama                 $x + $y         
        -       Çıkarma                 $x - $y     
        *       Çarpma                  $x * $y         
        /       Bölme                   $x / $y         
        %       Mod Alma                $x % $y         
        **      Üs Alma                 $x ** $y
        ++$x    İşlem öncesi arttırma   
        --$x    İşlem öncesi azaltma    
        $x++    İşlem sonrası arttırma  
        $x--    İşlem sonrası azaltma   
    */

    $a = 2;
    $b = 5;

    echo $a + $b;  // 7
    echo "<br>";

    echo $a - $b;  // -3
    echo "<br>";

    echo $a * $b;  // 10
    echo "<br>";

    echo $a / $b;  // 0.4
    echo "<br>";

    echo $a % $b;  //2
    echo "<br>";

    echo $a ** $b;  //32
    echo "<br>";

    //echo $a++;   // 2  => artırmadan yazar  = tekrar a yı yazdırdığında bu sefer artmış halini yazar
    echo "<br>";

    echo ++$a;    // 3   => artırır sonra yazar
    echo "<br>";

    echo $a--;
    echo "<br>";

    echo $a;
    echo "<br>";


?>