 <?php 
 require_once("baglan.php");
 ?>
 <div style=" border:1px  solid black; background-color: green; ">

    <br>
    <h3>Satın Alma Talebi Gönderme</h3>

    <?php 

    $sorgu = $db->prepare("SELECT * from tblodeme");

    $sorgu->execute();

    $satirlar = $sorgu->fetchALL(PDO::FETCH_ASSOC);

    $sorgu2 = $db->prepare("SELECT * from tblil");

    $sorgu2->execute();

    $satirlar2 = $sorgu2->fetchALL(PDO::FETCH_ASSOC);   

    $sorgu3 = $db->prepare("SELECT * from tblkategori");

    $sorgu3->execute();

    $satirlar3 = $sorgu3->fetchALL(PDO::FETCH_ASSOC);   

    $sorgu4 = $db->prepare("SELECT * from tblcekimturu");

    $sorgu4->execute();

    $satirlar4 = $sorgu4->fetchALL(PDO::FETCH_ASSOC);   

    ?>

    <form action="adminislem.php" method= "post" >

     <select  name = "cekimturu">
        <?php 
        foreach ($satirlar4 as $satir4) {?>
            <option value="<?php echo $satir4['id']; ?>"> <?php echo $satir4['cekimturu']; ?> </option>
        <?php  }?>              
    </select>

    <select  name = "fiyat">
            <?php 
            foreach ($satirlar4 as $satir4) {?>
                <option value="<?php echo $satir4['id']; ?>"> <?php echo $satir4['fiyat']; ?> </option>
            <?php  }?>              
        </select>
    
    <input type="date" name="cekimtarihi"   placeholder="cekimtarihi">

    <select  name = "sehir">
        <?php 
        foreach ($satirlar2 as $satir2) {?>
            <option value="<?php echo $satir2['id']; ?>"> <?php echo $satir2['sehir']; ?> </option>
        <?php  }?>              
    </select>

    <select  name = "odemeturu">
        <?php 
        foreach ($satirlar as $satir) {?>
            <option value="<?php echo $satir['id']; ?>"> <?php echo $satir['odemeturu']; ?> </option>
        <?php  }?>              
    </select>

    <select  name = "kategoriadi">
        <?php 
        foreach ($satirlar3 as $satir3) {?>
            <option value="<?php echo $satir3['id']; ?>"> <?php echo $satir3['kategoriadi']; ?> </option>
        <?php  }?>              
    </select>

    <input type="submit" name="musterisatinalmaislemi2" value="kaydet" onclick="popUp()">

</form>
<br>
</div><br>

<script>
    function popUp2(){
        alert("Çekim Talebiniz Veri Tabanımıza Eklenmiştir");
    }
</script>