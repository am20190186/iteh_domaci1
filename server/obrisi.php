<?php
include "../sesija.php";

$prozivod = trim($_POST['proizvod']);

if($baza->obrisi($prozivod)){
    echo "Uspesno izbrisan proizvod";
}else{
    echo "Doslo je do greske";
}