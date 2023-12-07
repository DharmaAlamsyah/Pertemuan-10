<?php
$server = "localhost:8012";
$user = "root";
$pass = "";
$database = "Pertemuan 10";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: ". mysqli_connect_error());
    }
?>