<?php
    class Buku{
        public $judul;
        public $pengarang;

        public function __construct($judul = "Dragon Ball", $pengarang = "Akira Toriyama"){
            $this->judul = $judul;
            $this->pengarang = $pengarang;
        }
    }

    $bukuBaru = new Buku();

    echo $bukuBaru->judul;
    echo "\n";
    $bukuBaru->pengarang;
?>