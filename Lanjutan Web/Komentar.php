<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link rel="stylesheet" href="Komentar.css">
</head>
<script type="text/javascript">
	function handler() {
		var Nama = document.getElementById("Nama").value;
		var Komen = document.getElementById("Komentar").value;
		if (Nama == "" || Komen == "") {
            alert("Lengkapi Data Anda!");
            return false;
		}
    }
</script>
<body>
<header class="header1">
    <!-- Navbar & Logo -->
        <nav>
            <a href="index.html" class="logo"><img src="Pictures/Logo.png" id="home"></a>
            <ul class="ul-navbar">
                <li><a href="Beranda.php #home" class="a-navbar">Beranda</a></li>
                <li><a href="#article" class="a-navbar">Artikel</a></li>
                <li><a href="https://instagram.com/galihh.h/" class="a-navbar" target="_blank">Kontak</a></li>
                <li><a href="Komentar.php" class="a-komentar" >Komentar</a></li>
            </ul>
        </nav>
    <div class="form">
        <form action="" method="POST" onsubmit="return handler()">
            <div>
                <label for="nm"><b>Nama</b></label>
                <input type="text" name="Nama" id="Nama" style="text-align: center;" placeholder="/15">
            </div>
            <div>
                <label for="km"><b>Komentar</b></label>
                <textarea type="coment" name="Komen" id="Komentar" style="text-align: center;" cols="50" rows="3" placeholder="/25"></textarea>
            </div>
            <div>
                <center><input type="submit" value="Simpan" name="spn" class="button"></center>
            </div>
        </form>
    </div>
    <?php
    include 'Koneksi.php';
        if (isset($_POST['spn'])){
            $insert = mysqli_query($conn, "INSERT INTO komentar VALUES
            ('".$_POST['Nama']."'
            ,'".$_POST['Komen']."')");
        }
    ?>
    <div class="isi-form">
        <div class="div-form">
            <table class="tb-form">
                <tr class="tr-form">
                    <th class="th-nm">Nama</th>
                    <th class="th-km">Komentar</th>
                    <th class="th-op">Opsi</th>
                </tr>
                <?php
                    $select = mysqli_query($conn, "SELECT * FROM komentar");
                    if(mysqli_num_rows($select) > 0){
                    while($hasil = mysqli_fetch_array($select)){
                ?>
                <tr>
                    <td class="td-form"><?php echo $hasil['nama'] ?></td>
                    <td class="td-form"><?php echo $hasil['komen'] ?></td>
                    <td class="td-form">
                        <a href="Edit.php?Nama=<?php echo $hasil['nama'] ?>" class="btn-edit">Edit</a>
                        <a href="Hapus.php?Nama=<?php echo $hasil['nama'] ?>" class="btn-hapus">Hapus</a>
                    </td>
                </tr>
                <?php }} else { ?>
                <tr>
                    <td colspan="3">---------------------------------- Data Kosong ---------------------------------- </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</header>
</body>
</html>