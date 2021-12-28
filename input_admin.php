<?php 
include 'koneksi.php';

$nama = $_POST['name'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$username = $_POST['username'];
$pass = $_POST['pass'];


mysqli_query($conn, "INSERT INTO admin VALUES('','$username','$pass','$nama','$email','$nohp','$alamat')");

header("location:admin_page.php?pesan=input");
?>