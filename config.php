<?php
$server = "localhost";
$user = "username_database";
$pass = "password_database";
$database = "Pertemuan 10";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: ". mysqli_connect_error());
    }
?>