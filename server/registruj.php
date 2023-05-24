<?php
include "../sesija.php";

$imePrezime = trim($_POST['imePrezime']);
$username = trim($_POST['registerUsername']);
$password = trim($_POST['registerPassword']);



if($baza->registruj($imePrezime, $username, $password)){

    $korisnik = $baza->login($username, $password);

    $_SESSION['korisnik'] = $korisnik;
    $_SESSION['admin'] = $korisnik->isAdmin();
    header("Location: ../index.php");
}else{
    header("Location: ../login.php?message=Greska");
}