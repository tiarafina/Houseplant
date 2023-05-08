<?php
session_start();
$id_produk=$_GET['kodeproduk'];

if(isset($_SESSION['keranjang'][$id_produk]))
{
    $_SESSION['keranjang'][$id_produk]+=1; 

}
else
{
    $_SESSION['keranjang'][$id_produk]=1; 
}


// echo "<pre>";
// print_r($_SESSION);
// echo "<pre>";
echo "<script>alert('produk telah masuk keranjang');</script>";
echo "<script>location='keranjang.php';</script>";
?>