<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="logoToko.jpg">
    <title>Rumah Makan Syaeful</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Riwayat</a></li>
            <li><a>Kategori</a>
            <ul>
                <li><a href="">Makanan</a></li>
                <li><a href="">Minuman</a></li>
                <li><a href="">Cemilan</a></li>
            </ul>
            </li>
            <li><a>Akun</a>
                <ul>
                    <li><a href="">Sign In</a></li>
                    <li><a href="">Sign Up</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="menu">
        
        <!-- Menu 1 -->

        <div class="card">
            <div class="image_container">
                <img src="fotoMenu/empalgentong.jpg" height="100%" width="100%" alt="empal gentong">
            </div>
            <div class="title">
                <span>Empal Gentong</span>
            </div>
            <div title="rating" class="rating">
                <span>★ 4.8</span>
            </div>
            <div class="action">
                <div class="price">
                    <span>Rp. 20.0000</span>
                </div>
                <button class="cart-button"><a href="pesan.php?nama_menu=Empal Gentong">Beli</a></button>
            </div>
        </div>

        <!-- Menu 2 -->

        <div class="card">
            <div class="image_container">
                <img src="fotoMenu/MieAyam.jpeg" height="100%" width="100%" alt="empal gentong">
            </div>
            <div class="title">
                <span>Mie Ayam</span>
            </div>
            <div title="rating" class="rating">
                <span>★ 4.3</span>
            </div>
            <div class="action">
                <div class="price">
                    <span>Rp. 10.0000</span>
                </div>
                <button class="cart-button"><a href="pesan.php?nama_menu=Mie Ayam">Beli</a></button>
            </div>
        </div>

        <!-- Menu 3 -->

        <div class="card">
            <div class="image_container">
                <img src="fotoMenu/bakso.png" height="100%" width="100%" alt="empal gentong">
            </div>
            <div class="title">
                <span>Bakso</span>
            </div>
            <div title="rating" class="rating">
                <span>★ 4.7</span>
            </div>
            <div class="action">
                <div class="price">
                    <span>Rp. 15.0000</span>
                </div>
                <button class="cart-button"><a href="pesan.php?nama_menu=Bakso">Beli</a></button>
            </div>
        </div>
    </div>
</body>
</html>