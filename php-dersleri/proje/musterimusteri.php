<?php 
require_once("baglan.php");
?>
<div style=" border:1px  solid black; background-color: lightgray; ">

    <br>

    <h2>Müşteri Veri Tabanı</h2>

    <h3>Müşteri İşlemler Tamamlamak İçin Bilgilerinizi Giriniz</h3>

    <?php 

    $sorgu = $db->prepare("SELECT * from tblil");

    $sorgu->execute();

    $satirlar = $sorgu->fetchALL(PDO::FETCH_ASSOC);

    ?>
    <div align="center">
        <form action="musteriislem.php" method= "post" >

            <table align="center">
                <tr> 
                    <td>
                       <input type="text" name="ad"  required=" " placeholder="Müşteri Adı">
                    </td>             
                </tr>
                <tr> 
                    <td>
                        <input type="text" name="soyad"  required=" " placeholder="Müşteri Soyadı">
                    </td>
                </tr>
                <tr>
                    <td> 
                       <input type="text" name="tckn"  required=" " placeholder="TCKN">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="telefon"  required=" " placeholder="Telefon">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="mail" name="mail"  required=" " placeholder="Mail">
                    </td>
                </tr>
                <tr>
                    <td >
                     <input type="text" name="adres"  required=" " placeholder="Adres">
                 </td>
             </tr>
             <tr>
                <td align="center">
                 <select name="sehir">
                    <?php 
                    foreach ($satirlar as $satir) {?>
                        <option value="<?php echo $satir['id']; ?>"> <?php echo $satir['sehir']; ?> </option>
                    <?php  }?>              
                </select>
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" name="musterikayitislemi2" value="Kaydet" onclick="popUp()" >
            </td>
        </tr>
        <tr>
        </table>
    </div>
</form> <br>
</div> <br>

