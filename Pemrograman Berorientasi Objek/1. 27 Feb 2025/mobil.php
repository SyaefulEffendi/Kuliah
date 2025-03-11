<?php
    class mobil{
        public $tipe = "";
        public $harga = "";
        public $pemilik = "";

        function set_name($tipe, $harga, $pemilik){
            $this -> tipe = $tipe . $this -> harga = $harga . $this -> pemilik = $pemilik ;
        }

        function get_name(){
            return $this -> tipe;
            return $this -> harga;
            return $this -> pemilik;
        }

    }
    
    $syaeful = new mobil();
    $raafi = new mobil();
    $syafi = new mobil();

    $syaeful -> set_name("Lamborgini ", 1000, " Syaeful");
    $raafi -> set_name("Inova ", 500, " Raafi");
    $syafi -> set_name ("Mobil Pick Up ", 100, " Syafi");

    echo $syaeful -> get_name();
    echo "\n";
    echo $raafi -> get_name();
    echo "\n";
    echo $syafi -> get_name();
?>

