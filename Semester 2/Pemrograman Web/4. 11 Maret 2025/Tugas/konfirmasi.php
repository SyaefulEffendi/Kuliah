<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" type="image/x-icon" href="logoToko.jpg">
    <title>Konfirmasi Pesanan</title>
</head>
<body>
    <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
            <h1>KONFIRMASI PESANAN</h1>
        </div>
        <div class="formbg-outer">
            <div class="formbg">
                <div class="formbg-inner padding-horizontal--48">
                <?php
                    session_start();

                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        $nama_menu = htmlspecialchars($_GET['nama_menu']);
                        $nama = htmlspecialchars($_GET['nama']);
                        $tingkat_pedas = htmlspecialchars($_GET['tingkat_pedas']);
                        $jumlah = htmlspecialchars($_GET['jumlah']);

                        $_SESSION['nama_menu'] = $nama_menu;
                        $_SESSION['nama'] = $nama;
                        $_SESSION['tingkat_pedas'] = $tingkat_pedas;
                        $_SESSION['jumlah'] = $jumlah;

                        echo "<p>Pesanan Anda: <h2>$nama_menu</h2></p>";
                        echo "<p>Nama Pemesan : <h2>$nama</h2></p>";
                        echo "<p>Kepedasan yang Dipilih : <h2>$tingkat_pedas</h2></p>";
                        echo "<p>Jumlah Porsi : <h3>$jumlah</h3></p>";
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $meja = htmlspecialchars($_POST['meja']);
                        $nama_menu = $_SESSION['nama_menu'];
                        $nama = $_SESSION['nama'];
                        $tingkat_pedas = $_SESSION['tingkat_pedas'];
                        $jumlah = $_SESSION['jumlah'];

                        echo "<h2>Pesanan Anda Telah Dikonfirmasi!</h2>";
                        echo "<p>Pesanan Anda: <h2>$nama_menu</h2></p>";
                        echo "<p>Nama Pemesan : <h2>$nama</h2></p>";
                        echo "<p>Kepedasan yang Dipilih : <h2>$tingkat_pedas</h2></p>";
                        echo "<p>Jumlah Porsi : <h3>$jumlah</h3></p>";

                        echo '
                            <form action="index.php" method="GET">
                            <div class="field padding-bottom--24">
                                <input type="submit" name="submit" value="Kembali ke Menu Utama">
                            </div>
                            </form>';
                    } else {
                ?>
                    <form id="stripe-login" action="" method="POST">
                        <div class="field padding-bottom--24">
                            <label for="jumlah">Nomor Meja :</label>
                            <input type="number" name="meja" id="meja" min="1" required>
                        </div>
                        <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                            <label for="checkbox">
                            <input type="checkbox" name="checkbox"> Konfirmasi Pesanan Anda Sudah Benar
                            </label>
                        </div>
                        <div class="field padding-bottom--24">
                            <input type="submit" name="submit" value="Konfirmasi">
                        </div>
                    </form>
                <?php
                    }
                ?>
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
</body>
</html>