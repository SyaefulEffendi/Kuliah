<?php
    class Suhu{
        public $celcius;

        function __construct($celcius){
            $this->celcius = $celcius;
            echo "Konversi Suhu dari Celcius";
            echo "\nsuhu dalam celcius = $celcius \n";
        }

        public function kelvin(){
            $kelvin = $this->celcius+273.15;
            echo "\nSuhu dalam Kelvin = $kelvin derajat \n";
        }

        public function fahrenheit(){
            $fahrenheit = $this->celcius*1.8+32;
            echo "Suhu dalam Fahrenheit = $fahrenheit derajat \n";
        }

        function __destruct(){
            echo "\nSekian konfersi suhu yang bisa dilakukan ";
        }
    }

    $suhu = new Suhu(36);
    $suhu->kelvin();
    $suhu->fahrenheit()

?>