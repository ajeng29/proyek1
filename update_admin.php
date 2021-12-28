<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['name'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$username = $_POST['username'];
$pass = $_POST['pass'];
 
mysqli_query($conn, "UPDATE admin SET username_adm='$username', password_adm='$pass', nama_adm='$nama', email_adm='$email', nohp_adm='$nohp', alamat='$alamat' WHERE idAdm='$id'");
 
header("location:admin_page.php?pesan=update");
 
?>