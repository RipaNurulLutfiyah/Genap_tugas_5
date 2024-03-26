<?php

class Hewan {
    public $nama;
    public $berat;

    public function __construct($nama, $berat) {
        $this->nama = $nama;
        $this->berat = $berat;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getBerat() {
        return $this->berat;
    }

    public function hasiltes() {
        return $this->berat >= 50 ? 'Normal' : 'Tidak Normal';
    }

    public function goldarah() {
        if ($this->berat >= 90) {
            return 'A+';
        } elseif ($this->berat >= 75) {
            return 'A';
        } elseif ($this->berat >= 60) {
            return 'B+';
        } else {
            return 'O';
        }
    }
}

?>
