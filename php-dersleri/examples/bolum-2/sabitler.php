<?php
    // Php Sabitler:
    // Sabitler veri saklamk için kullanılır ancak tanımlanan değer değiştirilemez.

    //define("baglanti","Mysql bağlantısı başarılı.");

    const baglanti = "mysql bağlantısı başarılı";
    //baglanti = "mssql başlantısı...";   // ! hata alır
     const usurname = "hakanakinci";
     const password = "1234";

    echo baglanti."<br>".usurname;
?>