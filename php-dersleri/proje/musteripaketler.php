<?php 
require_once("baglan.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>


    <div style=" border:1px  solid black; background-color: orange; ">
        <br>



        <div id="fiyat_getir">



            <h2>Paketlerimiz</h2>

            
            <br>

            <input type="text" name="" placeholder="Fiyata Göre Filtreleme" id="fiyatFiltreleme">
            <input type="button" name="" value="Filtrele" onclick="fiyatFiltre()">

            <br>

            <?php  

            if (isset($_GET['fiyat'])) {
                $sorgu = $db->prepare("Select
                 blcekimturu.id as aid,
                 tblcekimturu.cekimturu as acekimturu,
                 tblcekimturu.fiyat as afiyat,
                 blcekimturu.fotograf as afotograf

                 where  tblcekimturu.fiyat=:fiyat_alias

                 ");

                $sorgu->execute(array(
                    'fiyat_alias'=>$_GET["fiyat"]

                ));
            }
            ?>


            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>ÇEKİM TÜRÜ</th>
                    <th>FİYAT</th>
                    <th>FOTOGRAF</th>
                </tr>

                <?php 

                $sorgu = $db ->prepare("SELECT * FROM tblcekimturu");
                $sorgu->execute();

                while ($satir = $sorgu->FETCH(PDO::FETCH_ASSOC)){ ?>
                    <tr>
                        <td> <?php echo $satir["id"]; ?></td>
                        <td> <?php echo $satir["cekimturu"]; ?></td>
                        <td> <?php echo $satir["fiyat"]; ?> </td>
                        <td> <img src="<?php echo $satir["fotograf"];?>" width="150px" height="150"></td>              
                    </tr>
                <?php }   ?> 
                <br>
            </table> <br>
        </div>
    </div>


    <script type="text/javascript">

        function fiyatFiltre(){

          var fiyat =  document.getElementById('fiyatFiltreleme').value;

          window.location.href = "musteri.php?fiyat="+fiyat;
      }
  </script>

</body>
</html>