<?php 
require_once("baglan.php");
?>

    <div style=" border:1px  solid black; background-color: lightgray; ">


        <h3>Müşteri İşlemleri</h3>
        <br>

        <?php 

        $sorgu = $db->prepare("SELECT * from tblil");

        $sorgu->execute();

        $satirlar = $sorgu->fetchALL(PDO::FETCH_ASSOC);

        ?>

        <form action="adminislem.php" method= "post" >

            <input type="text" name="ad"  required=" " placeholder="Müşteri Adı">
            <input type="text" name="soyad"  required=" " placeholder="Müşteri Soyadı">
            <input type="text" name="tckn"  required=" " placeholder="TCKN">
            <input type="text" name="telefon"  required=" " placeholder="Telefon">
            <input type="mail" name="mail"  required=" " placeholder="Mail">
            <input type="text" name="adres"  required=" " placeholder="Adres">
            <select name="sehir">
                <?php 
                foreach ($satirlar as $satir) {?>
                    <option value="<?php echo $satir['id']; ?>"> <?php echo $satir['sehir']; ?> </option>
                <?php  }?>              
            </select>
            <input type="submit" name="musterikayitislemi" value="Kaydet">
        </form>

        <hr>
        <h3>Müşteriler</h3>


        <table border="1">
            <tr>
                <th>ID</th>
                <th>MÜŞTERİ ADI</th>
                <th>MÜŞTERİ SOYADI</th>
                <th>TCKN</th>
                <th>TELEFON</th>
                <th>MAİL</th>
                <th>ADRES</th>
                <th>İL</th>
                <th>DÜZENLE</th>
                <th>SİL</th>
            </tr>

            <?php 

            $sorgu = $db->prepare("Select
                tblmusteri.id as aid,
                tblmusteri.ad as aad,
                tblmusteri.soyad as asoyad,
                tblmusteri.tckn as atckn,
                tblmusteri.telefon as atelefon,
                tblmusteri.mail as amail,
                tblmusteri.adres as aadres,
                tblmusteri.ilid as ailad,
                tblil.id as iid,
                tblil.sehir as isehir
                from tblmusteri INNER JOIN tblil on tblmusteri.ilid=tblil.id");

            $sorgu->execute();

            while ($satir = $sorgu->FETCH(PDO::FETCH_ASSOC)){ ?> 

                <tr>
                    <td> <?php echo $satir["aid"]; ?></td>
                    <td> <?php echo $satir["aad"]; ?></td>
                    <td> <?php echo $satir["asoyad"];?></td>
                    <td> <?php echo $satir["atckn"]; ?></td>
                    <td> <?php echo $satir["atelefon"]; ?></td>
                    <td> <?php echo $satir["amail"]; ?></td>
                    <td> <?php echo $satir["aadres"]; ?></td>
                    <td> <?php echo $satir["isehir"]; ?></td>
                    <td>  <a href="musteri_duzenle.php?id=<?php echo $satir["aid"]; ?>"><button>Düzenle</button></a> </td>
                    <td> <a href="musteri_sil.php?id=<?php echo $satir["aid"]; ?>"><button>Sil</button></a></td>
                </tr>
            <?php }
            ?>  
        </table>
    </div>

