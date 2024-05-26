<?php
    $username = "admin";
    $password = "1234";

    if($username != "admin"){
        echo "Kullanıcı adı hatalı";
    }elseif($password != "1234"){
        echo "Parola yanlış";
    }else{
        echo "Merhana BTK";
    }

    echo "<br>";

    $saat = 20;

    if($saat < 10){
        echo "Günaydın :)";
    }elseif($saat < 19){
        echo "İyi günler :)";
    }else{
        echo "İyi akşamlar :)";
    }
?>