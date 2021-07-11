<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sitinur_311910105";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false) {
    echo "Koneksi ke server gagal.";
    die();
} else echo "";