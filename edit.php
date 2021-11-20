<?php
include 'connection.php';

$NIM = $_POST['NIM'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

$sql=mysqli_query($connection,"UPDATE mhs SET nim ='$nim', nama ='$nama', prodi ='$prodi', angkatan ='$angkatan' WHERE NIM = '$NIM'");
?>