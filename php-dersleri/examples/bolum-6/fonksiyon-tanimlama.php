<?php

    // Fonksiyon Tanımlama

    function selamlama(){
        for($i=0; $i<5; $i++){
            echo "Merhaba BTK"."<br>";
        }
    }

    selamlama();
    selamlama();
    selamlama();

    echo "<br>";

    function toplam(){
        $a = 20;
        $b = 30;
        echo $a + $b;
    }

    toplam();
?>