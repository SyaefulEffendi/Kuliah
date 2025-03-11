<?php
    class mobil{
        private $pemilik = "Ferry";
        private $merk = "Ferrari";

        public function __construct(){
            echo "Ini berasa dari contructor Mobil";
        }

        public function hidupkan_mobil(){
            return "Hidupkan mobil $this->merk punya $this->pemilik";
        }

        public function __destruct(){
            echo "Ini berasal dari Destructor Mobil";
        }
    }

    $mobil_ferry = new mobil();
    echo "\n";
    echo $mobil_ferry->hidupkan_mobil();
    echo "\n";

    unset($mobil_ferry);

    echo "\n";
    echo "Objek telah hilang dihancurkan";
?>