<?php
include "koneksi.php";
$id= $_GET['idAlumni'];

$sql = $pdo->prepare("DELETE FROM alumni WHERE idAlumni=:idAlumni");
$sql->bindParam(':idAlumni', $id);
$execute = $sql->execute();
if(execute){
    header("location:alumni_page.php");
}

?>