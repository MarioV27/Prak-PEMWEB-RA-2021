<?php
$password = "";
$database = "prak4";

$connection = mysqli_connect("localhost", "root", $password, $database);

if (!connection){
    die('gagal menyambungkan ke server')
}
?>