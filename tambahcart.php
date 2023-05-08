<?php
    include "koneksi.php"; 

    $kodeproduk = $_GET["kodeproduk"];

    $sql = "SELECT * FROM produk WHERE='".$_SESSION['kodeproduk']."'";
    $query = mysqli_query($conn,$sql);
    $hasil = mysqli_fetch_object($query);

    if(isset($_SESSION['cart'][$_GET['kodeproduk']]))
        $_SESSION['cart'][$_GET['kodeproduk']]+=$_GET['jumlah'];
        "nama" => $hasil->namaproduk,
        "gambar" => $hasil->gambarproduk,
        "harga" => $hasil->harga,
        "jumlah" => 1

    else
        $_SESSION['cart'][$_GET['kodeproduk']]=1;
    
    
    print_r($_SESSION['cart']);

    header("location:cartt.php");


?>