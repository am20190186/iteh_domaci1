<?php

class Brend implements JsonSerializable {
    private $brendId;
    private $nazivBrenda;

    public function __construct($brendId, $nazivBrenda) {
        $this->brendId = $brendId;
        $this->nazivBrenda = $nazivBrenda;
    }

    public function getBrendId() {
        return $this->brendId;
    }

    public function setBrendId($brendId) {
        $this->brendId = $brendId;
    }

    public function getNazivBrenda() {
        return $this->nazivBrenda;
    }

    public function setNazivBrenda($nazivBrenda) {
        $this->nazivBrenda = $nazivBrenda;
    }

    public function jsonSerialize() {
        return [
            'brendId' => $this->brendId,
            'nazivBrenda' => $this->nazivBrenda
        ];
    }
}
