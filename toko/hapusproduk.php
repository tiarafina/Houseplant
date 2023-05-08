<?php
require('koneksi.php');
session_start();
include "header.php";
include "menu.php";

$sukses       = "";
$error        = "";

if (isset($_GET['prod'])) {
    $prod = $_GET['prod'];
} else {
    $prod = "";
}
if($prod == 'delete'){
    $kodeproduk = $_GET['kodeproduk'];
    $sql1       = "delete from produk where kodeproduk = '$kodeproduk'";
    $q1         = mysqli_query($conn,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
?>