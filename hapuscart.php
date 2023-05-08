<?php
session_start();
$id_produk=$_GET['kodeproduk'];
unset($_SESSION['keranjang'][$id_produk]);

echo "<script>alert('produk dihapus');</script>";
echo "<script>location='keranjang.php';</script>";

?>