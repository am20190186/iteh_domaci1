<?php
include "../sesija.php";

$username = trim($_POST['loginUsername']);
$password = trim($_POST['loginPassword']);

if($korisnik = $baza->login($username, $password)){
    $_SESSION['korisnik'] = $korisnik;
    $_SESSION['admin'] = $korisnik->isAdmin();
    header("Location: ../index.php");
}else{
    header("Location: ../login.php?message=Greska");
}