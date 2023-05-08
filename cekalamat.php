<?php
session_start();
include "koneksi.php";

$username = $_SESSION["username"];
$jalan = $_POST["jalan"];
$kota = $_POST["kota"];
$provinsi = $_POST["provinsi"];
$sql = "UPDATE pengguna SET  jalan = '$jalan' , kota = '$kota', provinsi = '$provinsi' WHERE username = '$username'";
// echo "$sql";
if (mysqli_query($conn, $sql)) {
    echo "Alamat berhasil disimpan";
} else {
    echo  "tidak berhasil";
}