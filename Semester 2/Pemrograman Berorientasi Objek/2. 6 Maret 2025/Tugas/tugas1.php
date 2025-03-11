<?php
    class Laptop{
        public $merk;
        public $prosesor;
        public $ram;

        public function __construct($merk, $prosesor, $ram){
            $this->merk = $merk;
            $this->prosesor = $prosesor;
            $this->ram = $ram;
        }

        public function tampilkanInfo(){
            return "Laptop ini ber merk $this->merk dan menggunakan prosesor $this->prosesor dengan ram $this->ram";
        }
    }

    $laptop_loq = new laptop ("LOQ 15IRX9-AHD", "Intel Core I7-13650HX-AI", "12 GB DDR5");
    $laptop_rog = new laptop ("ROG Strix G15 (G513R)", "AMD Ryzem 7","8GB DDR5");
    $laptop_tuf = new laptop ("Asus TUF Gaming A15", "AMD Ryzen 9","8GB DDR5");

    echo $laptop_loq->tampilkanInfo();
    echo "\n";
    echo $laptop_rog->tampilkanInfo();
    echo "\n";
    echo $laptop_tuf->tampilkanInfo();
?>