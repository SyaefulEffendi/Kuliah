<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" type="image/x-icon" href="logoToko.jpg">
    <title>Form Pemesanan</title>
</head>
<body>
    <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
            <h1>FORM PEMESANAN</h1>
        </div>
        <div class="formbg-outer">
            <div class="formbg">
                <div class="formbg-inner padding-horizontal--48">
                    <?php
                        if (isset($_GET['nama_menu'])) {
                            $nama_menu = htmlspecialchars($_GET['nama_menu']);
                            echo "<h2>$nama_menu</h2>";
                        } else {
                            echo "<h2>Menu tidak ditemukan</h2>";
                            }
                    ?>
                    <form id="stripe-login" action="konfirmasi.php" method="GET">
                        <input type="hidden" name="nama_menu" value="<?php echo $nama_menu; ?>">
                        <div class="field padding-bottom--24">
                            <label for="nama">Nama Pemesanan:</label>
                            <input type="text" name="nama" id="nama">
                        </div>
                        <div class="field padding-bottom--24">
                            <div class="grid--50-50">
                            <label for="password">Pilih Takaran Pedas : </label>
                            </div>
                            <select id="tingkat_pedas" name="tingkat_pedas" required>
                                <option value="Tidak Pedas">Tidak Pedas</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Pedas">Pedas</option>
                                <option value="Sangat Pedas">Sangat Pedas</option>
                            </select>
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="jumlah">Jumlah Porsi :</label>
                            <input type="number" name="jumlah" id="jumlah" min="1">
                        </div>
                        <div class="field padding-bottom--24">
                            <input type="submit" name="submit" value="Continue">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-link padding-top--24">
            <span>Belum pilih menu? <a href="">Pilih</a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                <span><a href="https://www.instagram.com/syaefuleffendi">@syaefuleffendi</a></span>
                <span><a href="https://api.whatsapp.com/send/?phone=6285175200686&text&type=phone_number&app_absent=0">Contact</a></span>
                <span><a href="#">Privacy & terms</a></span>
            </div>
        </div>
    </div>
</body>
</html>