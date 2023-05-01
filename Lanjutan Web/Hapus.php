<?php
include 'Koneksi.php';
if(isset($_GET['Nama'])){
    $delete = mysqli_query($conn, "DELETE FROM komentar WHERE Nama = '".$_GET['Nama']."' ");
    header('location:Komentar.php');
}
?>