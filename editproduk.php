<?php
require('koneksi.php');
session_start();
include "header.php";
include "menu.php";

$kodeproduk = $_SESSION["kodeproduk"];
$namaproduk = $_POST["namaproduk"];
// $gambarproduk = $_FILES["gambarproduk"];
$harga = $_POST["harga"];
$deskripsi = $_POST["deskripsi"];
$kategori = $_POST["kategori"]

$query = "UPDATE produk SET namaproduk='.$namaproduk.',harga='.$harga.',deskripsi='.$deskripsi.', kategori='.$kategori.' WHERE kodeproduk='.$kodeproduk.'";
// echo "$sql";

$result = mysql_query($conn, $query);
if ($result) {
    echo  "update data berhasil";
} else {
    echo  "input data tidak berhasil";
}


?>

