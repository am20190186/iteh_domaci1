<?php

class Baza
{
    private $konekcija;

    public function __construct()
    {
        $this->konekcija = new Mysqli('localhost', 'root', '','sminka');
        $this->konekcija->set_charset('utf8');
    }

    public function vratiVrste()
    {
        $upit = "SELECT * FROM vrste";

        $podaci = [];

        $rs = $this->konekcija->query($upit);

        while ($red = $rs->fetch_object()){
            $podaci[] = new Vrsta($red->vrstaId, $red->nazivVrste);
        }

        return $podaci;
    }

    public function vratiBrendove()
    {
        $upit = "SELECT * FROM brendovi";

        $podaci = [];

        $rs = $this->konekcija->query($upit);

        while ($red = $rs->fetch_object()){
            $podaci[] = new Brend($red->brendId, $red->nazivBrenda);
        }

        return $podaci;
    }

    public function pretraziProizvode($brend, $sortiranje)
    {
        $upit = "SELECT * FROM proizvodi p join brendovi b ON p.brendId = b.brendId JOIN vrste v on p.vrstaId = v.vrstaId";

        if($brend != 0){
            $upit = $upit . " WHERE p.brendId = " . $brend;
        }

        $upit = $upit . " ORDER BY p.cena " . $sortiranje;

        $podaci = [];

        $rs = $this->konekcija->query($upit);

        while ($red = $rs->fetch_object()){
            $brend = new Brend($red->brendId, $red->nazivBrenda);
            $vrsta = new Vrsta($red->vrstaId, $red->nazivVrste);
            $podaci[] = new Proizvod($red->id, $red->naziv, $red->opis, $brend, $vrsta, $red->cena);
        }

        return $podaci;
    }

    public function login($username, $password)
    {
        $upit = "SELECT * FROM korisnik WHERE username = '".$username ."' AND password = '" .$password ."' LIMIT 1";
        $rs = $this->konekcija->query($upit);

        while ($red = $rs->fetch_object()){
            return new Korisnik($red->korisnikId, $red->imePrezime, $red->username, $red->password, $red->admin);
        }

        return null;
    }

    public function registruj($imePrezime, $username, $password)
    {
        $upit = "INSERT INTO korisnik VALUES (null,'$imePrezime', '$username', '$password', 0)";
        return $this->konekcija->query($upit);
    }

    public function unesiSminku($naziv, $opis, $brendId, $vrstaId, $cena)
    {
        $upit = "INSERT INTO proizvodi VALUES (null,'$naziv', '$opis', $brendId, $vrstaId, $cena)";
        return $this->konekcija->query($upit);
    }

    public function izmeniCenu($id, $cena)
    {
        $upit = "UPDATE proizvodi SET cena= $cena WHERE id = $id";
        return $this->konekcija->query($upit);
    }

    public function obrisi($id)
    {
        $upit = "DELETE FROM proizvodi WHERE id = $id";
        return $this->konekcija->query($upit);
    }
}