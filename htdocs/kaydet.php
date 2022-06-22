<?php

include 'navbar.php';

?>

<?php

require('mysqlbaglan.php');

if (isset($_POST['mail']) && isset($_POST['sifre'])) {

    extract($_POST);

    $sifre = hash('sha256', $sifre);

    $sql="INSERT INTO `Users` (mail, sifre, isim, soyisim, telno)"; 
   
    $sql = $sql . "VALUES ('$mail', '$sifre', '$isim', '$soyisim', '$telno')"; 
   

       $cevap = mysqli_query($baglanti, $sql); 
   
       if ($cevap){ 
         
         echo '<script type="text/JavaScript"> alert("Kayıt Oluşturuldu, rezervasyon yapabilirsiniz..");</script>';
        
       }else{ 
        
        
        echo '<script type="text/JavaScript">
        window.alert("Kayıt Oluşturulamadı!! tekrar deneyin..");
        </script>'; 
   
       } 
}
mysqli_close($baglanti);
?>

<form action="<?php $_PHP_SELF ?>" method="POST">
  <div class="row">
    <div class="col-md-4">
      <label for="email" class="form-label">Mail Adresi</label>
      <input type="email" class="form-control" name="mail" required>
    </div>
    <div class="col-md-4">
      <label for="inputName4" class="form-label">İsim</label>
      <input type="text" class="form-control"  name="isim" required>
    </div>
    <div class="col-md-4">
      <label for="inputName4" class="form-label">Soyisim</label>
      <input type="text" class="form-control"  name="soyisim" required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <label for="inputPassword4" class="form-label">Şifre</label>
      <input type="password" class="form-control" name="sifre"  required>
    </div>
    <div class="col-md-4">
      <label for="inputAddress" class="form-label">İletişim Numarası</label>
      <input type="text" class="form-control" name="telno"  placeholder="+90 5.." required>
    </div>
  </div>
  <br>

  <br>
  <div class="col-12">
    <button type="submit" class="btn btn-warning" name="kayit_ol">Kaydol</button>
  </div>
</form>

<?php

include 'footer.php';

?>