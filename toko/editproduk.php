<?php
require('koneksi.php');
session_start();
include "header.php";
include "menu.php";

if (isset($_GET['prod'])) {
    $prod = $_GET['prod'];
} else {
    $prod = "";
}
if ($prod == 'edit') {
    $kodeproduk = $_GET['kodeproduk'];
    $sql1       = "select * from produk where kodeproduk = '$kodeproduk'";
    $q1         = mysqli_query($conn, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $namaproduk = $r1['namaproduk'];
    $harga      = $r1['harga'];
    $gambarproduk = $r1 ['gambarproduk'];
    $deskripsi  = $r1['deskripsi'];
    $kodekategori= $r1['kodekategori'];

    if ($namaproduk == '') {
        $error = "Data tidak ditemukan";
    }
}

if ($prod == 'edit') { //untuk update
    $sql1       = "UPDATE produk set namaproduk='$namaproduk',gambarproduk=$target_file,harga='$harga',jumlah='$jumlah',deskripsi='$deskripsi',kodekategori=$kodekategori where kodeproduk='$kodeproduk'";
    $q1         = mysqli_query($conn, $sql1);
    echo "$sql1";
     if ($q1) {
        $sukses = "Data berhasil diupdate";
            
    } else {
         $error  = "Data gagal diupdate";
    }
}
?>