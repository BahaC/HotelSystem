<?php

session_start();

require('mysqlbaglan.php');



if (isset($_POST['mail']) and isset($_POST['sifre'])) {

    $mail = $_POST['mail'];
    
    $sifre = $_POST['sifre'];

    $sifre = hash('sha256', $sifre);

    $sql = "SELECT * FROM `Users` WHERE ";

    $sql = $sql . "mail= '$mail' and sifre='$sifre'";
    
    $cevap = mysqli_query($baglanti, $sql);



    if (!$cevap) {

        echo '<br>Hata:' . mysqli_error($baglanti);
    }



    $say = mysqli_num_rows($cevap);

    if ($say == 1) {

        $_SESSION['mail'] = $mail;
        header("Location:userinterface.php");
        echo "Giriş Başarılı";
    } else {

        $mesaj = "<h1> Hatalı Mail Adresi veya Şifre!</h1>";
    }
}

if (isset($_SESSION['mail'])) {

    
}

?>

<?php

include 'navbar.php';
?>

<div class="container">
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <?php
        if (isset($mesaj)) {
            echo $mesaj;
        }

        ?>
        <div class="row">
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Mail Adresi</label>
                <input type="text" class="form-control" name="mail">
            </div>
            <div class="col-md-4">
                <label for="checkPassword4" class="form-label">Şifre</label>
                <input type="password" class="form-control" name="sifre">
            </div>

            <div class="col-12"><br><br>
                <input type="submit" class="btn btn-warning" value="Giriş Yap">
            </div>
    </form>
</div>

<?php

include 'footer.php';

?>