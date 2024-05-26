 <?php 
 require_once("baglan.php");
 ?>
 <div style=" border:1px  solid black; background-color: green; ">


    <h3>Müşteri Satın Alma Geçmişi</h3>
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

        <input type="submit" name="musterisatinalmaislemi" value="kaydet">

    </form>

    <hr>

    <h3>Satın Alma İşlemleri</h3>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>ÇEKİM TÜRÜ</th>         
            <th>FİYAT</th>
            <th>TARİH</th>
            <th>ÇEKİM YERİ</th>
            <th>ÖDEME TÜRÜ</th>
            <th>ÇEKİM KATEGORİSİ</th>
            <th>DÜZENLE</th>
            <th>SİL</th>
        </tr>

        <?php 

        $sorgu = $db->prepare("Select
           tblsatinal.id as aid,
           tblsatinal.cekimturuid as acekimturuid,
           tblsatinal.cekimtarihi as acekimtarihi,
           tblsatinal.cekimyeri as acekimyeri,
           tblsatinal.odemeid as aodemeid,
           tblsatinal.kategoriid as akategoriid,
           tblsatinal.fiyatid as afiyatid,

           tblil.id as ilid,
           tblil.sehir as ilsehir,

           tblcekimturu.id as ctid,
           tblcekimturu.cekimturu as ctcekimturu,
           tblcekimturu.fiyat as ctfiyat,

           tblodeme.id as oid,
           tblodeme.odemeturu as oodemeturu,

           tblkategori.id as kid,
           tblkategori.kategoriadi as kkategoriadi

           from tblsatinal INNER JOIN tblil on tblsatinal.cekimyeri=tblil.id

           INNER JOIN tblcekimturu on tblsatinal.cekimturuid=tblcekimturu.id

           INNER JOIN tblodeme on tblsatinal.odemeid=tblodeme.id

           INNER JOIN tblkategori on tblsatinal.kategoriid=tblkategori.id

           order by tblsatinal.id
           ");

        $sorgu->execute();

        while ($satir = $sorgu->FETCH(PDO::FETCH_ASSOC)){ ?> 
            <tr>
                <td> <?php echo $satir["aid"]; ?></td>
                <td> <?php echo $satir["ctcekimturu"]; ?></td> 
                <td> <?php echo $satir["ctfiyat"]; ?></td>      
                <td> <?php echo $satir["acekimtarihi"]; ?></td>
                <td> <?php echo $satir["ilsehir"]; ?></td>
                <td> <?php echo $satir["oodemeturu"]; ?></td>
                <td> <?php echo $satir["kkategoriadi"]; ?></td>
                <td>  <a href="satinalma_duzenle.php?id=<?php echo $satir["aid"]; ?>">   <button>Düzenle</button>   </a> </td>
                <td> <a href="satinalma_sil.php?id=<?php echo $satir["aid"]; ?>">   <button>Sil</button>  </a></td>
            </tr>
        <?php }
        ?>  
    </table>
</div>