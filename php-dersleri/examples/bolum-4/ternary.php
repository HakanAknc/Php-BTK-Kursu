<?php

    $yas = 19;
    $egitim = "lise";
    $ülke = "türkiye";

    if($yas >= 18){
        if($egitim == "lise" or $egitim == "üniversite"){
            echo "ehliyet alabilir";
                if($ülke == "türkiye" or "almanya"){
                    echo " / ehliyeti kullanabilir";
                }else{
                    echo " / ehliyeti kullanamaz";
                }
        }else{
            echo "eğitim durumu yetersiz";
        }
    }else{
        echo "yaşınız tutmuyor";
    }

    echo "<br>";
    echo "<br>";

    $sonuc = ($yas >= 18)
                ? (($egitim == "lise" or $egitim == "üniversite")
                    ? "ehliyet alabilir"
                    : "eğitim durmunuz yetersiz")
                : "yaşınız tutmuyor";
    echo $sonuc;
?>