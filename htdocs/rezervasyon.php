<?php
//mysql baglanti kodunu ekliyoruz
include 'usernavbar.php';
include("mysqlbaglan.php");

//sorguyu hazirliyoruz
$sql = "SELECT * FROM Users WHERE id =".$_POST['id'];

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$cevap){
    echo '<br>Hata:'.mysqli_error($baglanti);
}

//veritabanından gelen cevabı alıyoruz.
$gelen=mysqli_fetch_array($cevap);
?>

<form action="guncellekaydet.php?id=<?php echo $_POST['id']?>" method="POST">

<label for="TatilBasla">Tatil Başlangıç Tarihini Seçiniz:</label>
<input type="date" id="TatilBasla" name="TatilBasla" value="<?php echo $gelen['baslangicTarihi']?>">
<label for="TatilBit">Tatil Bitiş Tarihini Seçiniz:</label>
<input type="date" id="TatilBit" name="TatilBit" value="<?php echo $gelen['bitisTarihi']?>">
<br>
<input type="submit" value="Rezerve Et" class="btn btn-warning"/>
</form>

<?php
/*
<select class="col-md-4" aria-label=".form-select-lg example">
    <option selected>Konaklamak istediğiniz oda tipini seçiniz.</option>
    <option value="Standart">Standart Oda</option>
    <option value="Aile">Aile Odası</option>
    <option value="Suit">Suite Oda</option>
</select>
*/
?><br><br>
<?php
include 'footer.php';
?>
