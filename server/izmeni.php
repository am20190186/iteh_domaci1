<?php
include "../sesija.php";

$prozivod = trim($_POST['proizvod']);
$cena = trim($_POST['cena']);

if($baza->izmeniCenu($prozivod, $cena)){
    echo "Uspesno izmenjen proizvod";
}else{
    echo "Doslo je do greske";
}