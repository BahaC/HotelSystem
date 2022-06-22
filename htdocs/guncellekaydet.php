<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");

//degiskenleri formdan aliyoruz
extract($_POST);

//sorguyu hazirliyoruz
$sql = "UPDATE Users " .
    "SET kiralananOda='$kiralananOda',baslangicTarihi='$baslangicTarihi',bitisTarihi='$bitisTarihi' " .
    "WHERE id=" . $_GET['id'];
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti, $sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if (!$cevap) {
    echo '<br>Hata:' . mysqli_error($baglanti);
} else {
    echo "Kayıt Güncellendi.";
}

//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
