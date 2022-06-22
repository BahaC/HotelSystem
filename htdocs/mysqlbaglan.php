<?php
$server = 'sql202.epizy.com';
$user = 'epiz_31972510';
$password = 'Adu7MI4dRxm';
$database = 'epiz_31972510_CaliskanHotel';

$baglanti = mysqli_connect($server, $user, $password, $database);

if (!$baglanti) {
    echo "MySQL sunucu ile baglanti kurulamadi! </br>";
    echo "HATA: " . mysqli_connect_error();
    exit;
}
