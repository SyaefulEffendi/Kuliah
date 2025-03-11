<?php
    class laptop{
        public $tipe = "";
        public $pemilik = "";
        public $harga = "";

        function set_name($tipe, $pemilik, $harga){
            $this -> tipe = $tipe . $this -> pemilik = $pemilik . $this -> harga = $harga;
        }

        function get_name(){
            return $this -> tipe;
            return $this -> pemilik;
            return $this -> harga;
        }
    }

    $syaeful = new laptop();
    $raafi = new laptop();
    $syafi = new laptop();
    $rama = new laptop();
    $phongkiek = new laptop();

    $syaeful -> set_name("Lenovo Think Pad", " Syaeful ", 2000);
    $raafi -> set_name("Tuf Gaming", " Raafi ", 13000);
    $syafi -> set_name ("ROG Strix", " Syafi ", 16000);
    $rama -> set_name("MacBook", " Ramadhani ", 8000);
    $phongkiek -> set_name("Victus", " Phongkiek ", 13000);

    echo $syaeful -> get_name();
    echo "\n";
    echo $raafi -> get_name();
    echo "\n";
    echo $syafi -> get_name();
    echo "\n";
    echo $rama -> get_name();
    echo "\n";
    echo $phongkiek -> get_name();

?>

