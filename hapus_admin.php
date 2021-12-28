<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM admin WHERE idAdm='$id'");

header("location:admin_page.php?pesan=hapus");
?>