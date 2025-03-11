<?php
    class kamar{
        public $nomor_kamar = "";
        public $penghuni = "";
        public $harga_sewa = "";

        function set_name($nomor_kamar, $penghuni, $harga_sewa){
            $this -> nomor_kamar = $nomor_kamar . $this -> penghuni = $penghuni . $this -> harga_sewa = $harga_sewa;
        }

        function get_name(){
            return $this -> nomor_kamar;
            return $this -> penghuni;
            return $this -> harga_sewa;
        }
    }

    $syaeful = new kamar();
    $cahya = new kamar();
    $syafi = new kamar();

    $syaeful -> set_name(4, " Syaeful ", 450000);
    $cahya -> set_name(8, " Cahya ", 450000);
    $syafi -> set_name (5, " Syafi ", 450000);

    echo $syaeful -> get_name();
    echo "\n";
    echo $cahya -> get_name();
    echo "\n";
    echo $syafi -> get_name();
?>

