<?php
class Korisnik implements JsonSerializable {
    private $korisnikId;
    private $imePrezime;
    private $username;
    private $password;
    public $admin;

    public function __construct($korisnikId, $imePrezime, $username, $password, $admin) {
        $this->korisnikId = $korisnikId;
        $this->imePrezime = $imePrezime;
        $this->username = $username;
        $this->password = $password;
        $this->admin = $admin;
    }

    public function getKorisnikId() {
        return $this->korisnikId;
    }

    public function setKorisnikId($korisnikId) {
        $this->korisnikId = $korisnikId;
    }

    public function getImePrezime() {
        return $this->imePrezime;
    }

    public function setImePrezime($imePrezime) {
        $this->imePrezime = $imePrezime;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getAdmin() {
        return $this->admin;
    }

    public function setAdmin($admin) {
        $this->admin = $admin;
    }

    public function jsonSerialize() {
        return [
            'korisnikId' => $this->korisnikId,
            'imePrezime' => $this->imePrezime,
            'username' => $this->username,
            'password' => $this->password,
            'admin' => $this->admin
        ];
    }

    public function isAdmin()
    {
        return (bool)$this->admin;
    }
}
