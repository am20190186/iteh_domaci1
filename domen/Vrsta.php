<?php
class Vrsta implements JsonSerializable {
    private $vrstaId;
    private $nazivVrste;

    public function __construct($vrstaId, $nazivVrste) {
        $this->vrstaId = $vrstaId;
        $this->nazivVrste = $nazivVrste;
    }

    public function getVrstaId() {
        return $this->vrstaId;
    }

    public function setVrstaId($vrstaId) {
        $this->vrstaId = $vrstaId;
    }

    public function getNazivVrste() {
        return $this->nazivVrste;
    }

    public function setNazivVrste($nazivVrste) {
        $this->nazivVrste = $nazivVrste;
    }

    public function jsonSerialize() {
        return [
            'vrstaId' => $this->vrstaId,
            'nazivVrste' => $this->nazivVrste
        ];
    }
}
