<?php
    $gaji = 16000000;

    $iuran_total = 0.057 * $gaji;
    $jht_sendiri = 0.02 * $gaji;
    $jht_perusahaan = 0.037 * $gaji;
    
    $jkk_sangatRendah = 0.0024 * $gaji;
    $jkk_rendah = 0.0054 * $gaji;
    $jkk_sedang = 0.0089 * $gaji;
    $jkk_tinggi = 0.0127 * $gaji;
    $jkk_sangatTinggi = 0.0174 * $gaji;

    $jkm = 0.003 * $gaji;

    $jp_total = 0.03 * 8754600;
    $jp_sendiri = 0.01 * 8754600;
    $jp_perusahaan = 0.02 * 8754600;

    $urut_terkecil = array($iuran_total, $jht_sendiri, $jht_perusahaan,
                    $jkk_sangatRendah, $jkk_rendah, $jkk_sedang, $jkk_tinggi, $jkk_sangatTinggi,
                    $jkm, $jp_total, $jp_sendiri, $jp_perusahaan);
    sort($urut_terkecil);

    $urut_terbesar = array($iuran_total, $jht_sendiri, $jht_perusahaan,
                    $jkk_sangatRendah, $jkk_rendah, $jkk_sedang, $jkk_tinggi, $jkk_sangatTinggi,
                    $jkm, $jp_total, $jp_sendiri, $jp_perusahaan);
    rsort($urut_terbesar)
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1{
            text-align: center;
        }
    </style>
    <title>Perhitungan BPJS</title>
</head>
<body>
    <h1>Perhitungan BPJS Ketenagakerjaan</h1>
    Seorang pemuda bernama Syaeful dengan gaji 16.000.000 ingin menghitung Iuran BPJS Ketenagakerjaan
    <?php
        echo "<h3>1. Jaminan Hari Tua (JHT)</h2>";
        echo "1. Iuran total keseluruhan JHT Syaeful : Rp. $iuran_total / bulan <br>";
        echo "2. Iuran JHT yang dibayar Syaeful : Rp. $jht_sendiri / bulan <br>";
        echo "3. Iuran JHT yang dibayar perusahaan : Rp. $jht_perusahaan / bulan";

        echo "<h3>2. Jaminan Kecelakaan Kerja (JKK)</h2>";
        echo "Jika kecelakaan yang dialami Syaeful memiliki tingkat risiko : <br>";
        echo "1. sangat rendah maka akan mendapatkan : Rp. $jkk_sangatRendah / bulan <br>";
        echo "2. rendah maka akan mendapatkan : Rp. $jkk_rendah / bulan <br>";
        echo "3. sedang maka akan mendapatkan : Rp. $jkk_sedang / bulan <br>";
        echo "4. tinggi maka akan mendapatkan : Rp. $jkk_tinggi / bulan <br>";
        echo "5. sangat tinggi maka akan mendapatkan : Rp. $jkk_sangatTinggi / bulan";

        echo "<h3>3. Jaminan Kematian (JKM)</h2>";
        echo "Jaminan kematian yang akan didapatkan oleh Syaeful adalah : Rp. $jkm / bulan";
        
        echo "<h3>4. Jaminan Pensiunan (JP)</h2>";
        echo "1. Iuran total keseluruhan JP Syaeful : Rp. $jp_total /bulan <br>";
        echo "2. Iuran JP yang dibayar Syaeful : Rp. $jp_sendiri / bulan <br>";
        echo "3. Iuran JP  yang dibayar perusahaan : Rp. $jp_perusahaan / bulan <br>";
        echo "<br>";

        echo "<br><h3>Mengurutkan nilai dari yang terkecil ke terbesar </h3>";
        foreach ($urut_terkecil as $urut_terkecil){
            echo "Rp.  " . $urut_terkecil . " / bulan <br>";
        }

        echo "<br><h3>Mengurutkan nilai dari yang terbesar ke terkecil</h3>";
        foreach ($urut_terbesar as $urut_terbesar){
            echo "Rp.  " . $urut_terbesar . " / bulan <br>";
        }
    ?>
</body>
</html>