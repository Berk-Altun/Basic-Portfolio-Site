<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="project";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);


if(!$baglan)
{ 
    die("Bir problem oluştu, lütfen yöneticiye bildiriniz.".mysqli_connect_error());
}

?>