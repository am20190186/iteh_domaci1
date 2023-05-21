<?php
class Proizvod implements JsonSerializable {
    private $id;
    private $naziv;
    private $opis;
    private $brendId;
    private $vrstaId;
    private $cena;

    public function __construct($id, $naziv, $opis, $brendId, $vrstaId, $cena) {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->opis = $opis;
        $this->brendId = $brendId;
        $this->vrstaId = $vrstaId;
        $this->cena = $cena;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNaziv() {
        return $this->naziv;
    }

    public function setNaziv($naziv) {
        $this->naziv = $naziv;
    }

    public function getOpis() {
        return $this->opis;
    }

    public function setOpis($opis) {
        $this->opis = $opis;
    }

    public function getBrendId() {
        return $this->brendId;
    }

    public function setBrendId($brendId) {
        $this->brendId = $brendId;
    }

    public function getVrstaId() {
        return $this->vrstaId;
    }

    public function setVrstaId($vrstaId) {
        $this->vrstaId = $vrstaId;
    }

    public function getCena() {
        return $this->cena;
    }

    public function setCena($cena) {
        $this->cena = $cena;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'naziv' => $this->naziv,
            'opis' => $this->opis,
            'brendId' => $this->brendId,
            'vrstaId' => $this->vrstaId,
            'cena' => $this->cena
        ];
    }
}
