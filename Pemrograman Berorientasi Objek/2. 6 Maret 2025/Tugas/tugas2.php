<?php
    class Mahasiswa{
        public $nama;
        public $nim;
        public $jurusan;

        public function __construct($nama, $nim, $jurusan = "Teknik Informatika"){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
        
        public function tampilkanData(){
            return "Nama : $this->nama \nNIM : $this->nim \nProdi : $this->jurusan \n";
        }
    }

    $syaeful = new Mahasiswa("Moh. Syaeful Effendi", "V3924019");
    $raafi = new Mahasiswa("Raafi Muhammad Alim","V3924030");
    $syafi = new Mahasiswa("Syafi Octavian Zain","V3924011");

    echo $syaeful->tampilkanData();
    echo "\n";
    echo $raafi->tampilkanData();
    echo "\n";
    echo $syafi->tampilkanData();
?>