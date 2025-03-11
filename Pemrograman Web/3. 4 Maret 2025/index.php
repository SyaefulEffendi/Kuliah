<?php
    //Bagian Variabel PHP
    $txt1 = "Hello World";
    $txt2 = "1234";

    //bagian Operator PHP
    $a = 75;
    $b = "75";
    $c = $a == $b;
    $c2 = $a === $b;

    //Bagian Struktur Kontrol PHP
    //Kondisional statement IF
    $nilai = 75;

    //Kondisional statement switch
    $lambang = "Rantai Emas";

    //Perulangan
    //While loop
    //Do while loop
    $x = 1;

    //For loop
    $y = 1;

    //Foreach loop
    $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

    //Array PHP
    //Array Numerik
    $name[0] = "Syaeful";
    $name[1] = "Raafi";
    $name[2] = "Syafi";

    //Array Asosiatif
    $age['Syaeful'] = 19;
    $age['Raafi'] = 18;
    $age['Syafi'] = 18;

    //Array Multidimensi
    $families = array(
        "Titik Handayani" => array("Syaeful","Raafi","Syafi","Gendoon","Rossi","Gita",),
        "Sugeng Kost" => array ("Alip"),
        "Yuli Kost" => array ("Phongkiek", "Ramadhani", "Gendon")
    );
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h2>Sintaks Dasar PHP</h2>";
        echo "Hello world";
        print "<h1>PHP</h1>";
        
        echo "<h2>Variabel PHP : </h2>";
        echo $txt1." | ".$txt2;

        echo "<br>";
        echo "<br>";

        echo "<h2>Operator PHP : </h2>";
        echo "Variabel a: $a <br>";
        echo "Variabel b: $b <br>";
        echo "Variabel a == b :";
        var_dump(($c));
        echo "<br>";
        echo "Variabel a === b :";
        var_dump($c2);
        echo "<br>";
        echo "Hasil ++a : " . ++$a . "<br>";
        echo "Hasil b++ : " . $b++ . "<br>";
        echo "Variabel b sekarang : " . $b . "<br>";
        echo "Hasil variabel d : " . $hasil = $d ?"sudah dideklarasikan":
        "Belum dideklarasikan <br>";
        echo "Variabel d : " . $hasil = $d ?? "kosong" . "<br>";
        $d = 100;
        echo "Variable d : $d <br>";
        echo "Hasil variable d : " . $hasil = $d ? "Sudah dideklarasikan <br>":
        "Belum dideklarasikan<br>";
        echo "Variable d : " . $hasil = $d ?? "Kosong";

        echo "<br> <br>";

        echo "<h2>Struktur Kontrol PHP</h2>";
        echo "<h3>Kondisional Statment IF</h3>";
        if($nilai >= 85){
            echo "Nilai Sempurna";
        }elseif($nilai >= 80){
            echo "Nilai Baik";
        }else{
            echo "Silahkan Tingkatkan Nilai";
        }

        echo "<h3>Kondisional statement switch</h3>";
        switch($lambang){
            case "Bintang":
                echo "Sila 1";
                break;
            case "Rantai Emas":
                echo "Sila 2";
                break;
            case "Pohon Bringin":
                echo "Sila 3";
                break;
            default:
            echo "Lambang Garuda Pancasila";
        }

        echo "<h3>Perulangan</h3>";
        echo "<h4>While Loop</h4>";
        while($x <= 0){
            echo "Nilai X adalah $x <br>";
            $x++;
        }

        echo "<h4>Do While Loop</h4>";
        do{
            echo "Nilai x adalah : $x <br>";
            $x++;
        }while($x <= 0);

        echo "<h4>For Loop</h4>";
        for($z = 2; $z <= 20; $z+=2){
            echo "Bilangan genap $y: $z <br>";
            ++$y;
        }

        echo "<h4>Foreach Loop</h4>";
        echo "Hari dalam 1 minggu : <br>";
        foreach($hari as $value){
            echo "$value <br>";
        }

        echo "<h4>Array PHP</h4>";
        echo "<h5>Array Numerik</h5>";
        echo $name[0] . " dan " . $name[1] . " asalah teman kampus " . $name[2];

        echo "<h5>Array Asosiatif</h5>";
        echo "Umur Syaeful, Raafi, dan Syafi adalah " . $age['Syaeful'] . " , " . $age["Raafi"] . ", dan " . $age["Syafi"];

        echo "<h5>Array Multidimensi</h5>";
        echo "Menampilkan Array Multidimensi secara manual <br>";
        echo $families['Titik Handayani'][0] . ", ".
            $families['Titik Handayani'][1] . ", ".
            $families['Titik Handayani'][2] . ", ".
            $families['Titik Handayani'][3] . ", ".
            $families['Titik Handayani'][4] . ", ".
            $families['Titik Handayani'][5] . ", ". "Adalah Kos dari Titik Handayani <br>";
        echo $families['Sugeng Kost'][0]. " adalah kos dari Sugeng Kos <br>";
        echo $families['Yuli Kost'][0] . ", " .
            $families['Yuli Kost'][1] . ", " .
            $families['Yuli Kost'][2] . " dari Yuli Kost";

        echo "<br><br> Menampilkan Array Multidimensi dengan looping <br>";
        foreach ($families as $keluarga => $nama){
            foreach ($nama as $families => $value){
                echo $value . ", ";
            }
            echo "Adalah Keluarga " . $keluarga . "<br>";
        }
    ?>
</body>
</html>