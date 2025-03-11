<?php
    class mobil{
        private $pemilik;
        private $merk;

        public function __construct($pemilik, $merk){
            $this->pemilik = $pemilik;
            $this->merk = $merk;
        }

        public function hidupkan_mobil(){
            return "Hidupkan mobil $this->merk punya $this->pemilik";
        }
    }

    $mobil_Ferry = new mobil("Ferry", "Ferrari");

    echo $mobil_Ferry->hidupkan_mobil();
    echo "\n";

    $mobil_Aris = new mobil("Aris","Lamborgini");
    echo $mobil_Aris->hidupkan_mobil();
?>