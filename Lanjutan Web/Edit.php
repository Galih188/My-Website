<?php
include 'Koneksi.php';
$edit = mysqli_query($conn, "SELECT * FROM komentar WHERE Nama = '".$_GET['Nama']."'");
$result = mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="edit.css">
</head>
<!-- <script type="text/javascript">
	function handler() {
		var Nama = document.getElementById("Nama").value;
		var Komen = document.getElementById("Komentar").value;
		if (Nama == "" && Komen == "") {
            alert("Lengkapi Data Anda!");
            even.prefentDefault();
            return false;
		}
    }
</script> -->
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
    <div class="form-edit">
        <form action="Komentar.php" method="POST" onsubmit="return handler()">
            <div>
                <label for="nm"><b>Nama</b></label><br>
                <input type="text" name="Nama" id="Nama" style="text-align: center;" class="edit-input" value="<?php echo $result['nama']?>">
            </div>
            <div>
                <label for="km"><b>Komentar</b></label><br>
                <input type="text" name="Komen" id="Komentar" style="text-align: center;" class="edit-input" value="<?php echo $result['komen']?>">
            </div>
            <div>
                <center><input type="submit" value="Update" name="edit-btn" class="button"></center>
            </div>
        </form>
    </div>
    <?php
        if (isset($_POST['edit-btn'])){
            if($Nama != "" || $Komen != "" ){
                $up = mysqli_query($conn, "UPDATE komentar SET nama = '".$_POST['Nama']."', komen ='".$_POST['Komen']."' WHERE nama = '".$_GET['Nama']."'");
                echo "<script>
                        alert('Data berhasil diubah');
                        document.location.href = 'Komentar.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Data gagal diubah');
                        document.location.href = 'Edit.php';
                    </script>";
                return false;
                }
            exit;
        }
    ?>
</header>   
</body>
</html>