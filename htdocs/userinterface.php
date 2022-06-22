<?php
session_start();
include 'usernavbar.php';
include("mysqlbaglan.php");



/*$sql = "SELECT* FROM Users WHERE ID=(SELECT max(ID) FROM Users)";

if(isset($_POST['submit'])) {

  if ($_POST['submit'] == 'rezaile') {

    $sql = "UPDATE Users SET 
    kiralananOda = 'Aile Odası' WHERE mail = $_SESSION[mail]";
    header("Location:rezervasyon.php");

  } else if ($_POST['submit'] == 'rezstandart') {

    $sql = "UPDATE Users SET 
    kiralananOda = 'Standart Oda' WHERE mail = $_SESSION[mail]";
    header("Location:rezervasyon.php");


  } else if ($_POST['submit'] == 'rezsuit') {

    $sql = "UPDATE Users SET 
    kiralananOda = 'Suit Oda' WHERE mail = $_SESSION[mail]";
    header("Location:rezervasyon.php");
  }
}*/




?>
<!-- navbar bitiş, carousel başlangıcı -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/Tek.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="a">Standart Oda</h5>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/Suite.png" class="d-block w-80" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="a">Aile Odası</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/suite.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="b">Suite Oda</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
  <div class="row">
    <h2 style="text-align: center;"><br>Odalarımız</h2>
    <form action="rezervasyon.php" method="POST">
      <div class="col-sm-4">
        <div class="panel-group">
          <div class="panel panel-warning">
            <div class="panel-heading" style="text-align:center; font-size: 17px;"><b>Standart Oda</b></div>
            <div class="panel-body"><img src="panel/standart.png"></div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-12 text-center">
                  Standart odalarımız bir misafirimize hizmet vermektedir</div>
                <div class="col-sm-12 text-center">
                  <br><button type="submit" class="btn btn-warning" name="rezstandart">
                    Rezervasyon Yap</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel-group">
          <div class="panel panel-warning">
            <div class="panel-heading" style="text-align:center; font-size: 17px;"><b>Suite Oda</b></div>
            <div class="panel-body"><img src="panel/suit.jpg"></div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-12 text-center">
                  Otelimizin özenle hazırlanmış suite odaları</div>
                <div class="col-sm-12 text-center">
                  <br><br><button type="submit" class="btn btn-warning" name="rezsuit">
                    Rezervasyon Yap</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="panel-group">
          <div class="panel panel-warning">
            <div class="panel-heading" style="text-align:center; font-size: 17px;"><b>Aile Odası</b></div>
            <div class="panel-body"><img src="panel/aile.png"></div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-12 text-center">
                  Aile odalarımız ailecek tatil yapmak isteyen misafirlerimiz içindir.</div>
                <div class="col-sm-12 text-center">
                  <br><button type="submit" class="btn btn-warning" name="rezaile">
                    Rezervasyon Yap</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- 352x264 -->

    <?php
    include 'footer.php';
    ?>
    </body>

    </html>