<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionista</title>
    <link rel="stylesheet" href="Beranda.css">
</head>
<body>
    <header class="header1">
        <!-- Navbar & Logo -->
            <nav>
                <a href="index.html" class="logo"><img src="Pictures/Logo.png" id="home"></a>
                <ul class="ul-navbar">
                    <li><a href="Beranda.php #home" class="a-home">Beranda</a></li>
                    <li><a href="#article" class="a-navbar">Artikel</a></li>
                    <li><a href="https://instagram.com/galihh.h/" class="a-navbar" target="_blank">Kontak</a></li>
                    <li><a href="Komentar.php" class="a-navbar" >Komentar</a></li>
                </ul>
            </nav>
            <!-- Pembuka -->
            <div class="content">
               <h1>FASHIONISTA</h1>
               <p>Hai 
                <?php
                    if(isset($_POST['simpan'])){
                        $nm=$_POST['nama'];
                        echo "$nm";
                    }
                ?>!
                <br> Selamat datang diwebsite saya</p>
            </div>
        </div>
        <!-- Button -->
        <div class="button">
            <a href="#article" class="btn" id="tombol">Mulai</a>
        </div>
    </header>
    <!-- Konten -->
    <div class="content1">
    <header>
        <div class="navbar">
            <nav class="logo"><img src="Pictures/Logo.png" id="article">
                <ul class="ul-navbar">
                    <li><a href="#home" class="a-navbar">Beranda</a></li>
                    <li><a href="#article" class="a-article">Artikel</a></li>
                    <li><a href="https://instagram.com/galihh.h/" class="a-navbar" target="_blank">Kontak</a></li>
                    <li><a href="Komentar.php" class="a-navbar" >Komentar</a></li>
                </ul>
            </nav>
        </div>
    </header>
        <h1 class="content1-h1">Artikel Pakaian</h1>
        <div class="div-content1">
            <ul class="ul-content1">
                <li class="article">
                    <a href="Definisi.html" class="a-btn1">Definisi</a>
                </li>
                <li class="article">
                    <a href="Fungsi.html" class="a-btn1">Fungsi</a>
                </li>
                <li class="article">
                    <a href="Jenis.html" class="a-btn1">Jenis</a>
            </ul>
            <ul class="ul2-content1">
                <li class="article">
                    <a href="Etika.html" class="a-btn1">Etika</a>
                </li>
                <li class="article">
                    <a href="Dampak.html" class="a-btn1">Dampak</a>
                </li>
            </ul>
        </div>
</body>
</html>