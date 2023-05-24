<?php
include "../sesija.php";

$naziv = trim($_POST['naziv']);
$opis = trim($_POST['opis']);
$brend = trim($_POST['brend']);
$vrsta = trim($_POST['vrsta']);
$cena = trim($_POST['cena']);

if($baza->unesiSminku($naziv, $opis, $brend, $vrsta, $cena)){
    echo "Uspesno unet proizvod";
}else{
    echo "Doslo je do greske";
}