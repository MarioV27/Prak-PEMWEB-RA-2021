<?php
include 'connection.php';

$NIM = $_POST['NIM'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

$sql=mysqli_query($connection,"INSERT INTO mhs (nama,NIM,prodi,angkatan)values('$nama','$NIM','$prodi','$angkatan')");
?>