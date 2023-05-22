<?php

include 'domen/Brend.php';
include 'domen/Proizvod.php';
include 'domen/Vrsta.php';
include 'domen/Korisnik.php';
session_start();

if(!isset($_SESSION['korisnik'])){
    $_SESSION['korisnik'] = null;
    $_SESSION['admin'] = false;
}


require 'Baza.php';

$baza = new Baza();