<?php
$host = "localhost";
$username = "root";
$password = "";
$databasename = "smart_perpus";

// Syntax untuk koneksi ke MySQL
$con = mysqli_connect($host, $username, $password, $databasename);

// Perkondisian jika gagal konek ke MySQL
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}