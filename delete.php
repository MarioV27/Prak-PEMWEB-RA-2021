<?php
include 'connection.php';

$NIM = $_POST['NIM'];

$sql=mysqli_query($connection,"delete form mhs where NIM='$NIM'")
?>