<?php 
    include "koneksi.php";

    // $sql = "INSERT INTO transaksi (kodetransaksi, metodebayar, tgltrans) VALUES ('" . $kodetrans. "','" . $metodebayar . "','" . date("Y-m-d") . "')";"
    // $query = mysqli_query($conn, $sql);

    foreach($_SESSION["cart"] as $cart => $val){
        $sql = "INSERT INTO transaksi (kodetransaksi, metodebayar, tgltrans) VALUES ('" . $kodetrans. "','" . $metodebayar . "','" . date("Y-m-d") . "','" . $kodetrans . "','" . $cart . "','" . $val["jumlah"] . "')";
        $query = mysqli_query($conn, $sql);

    }

    unset($_SESSION["cart"]);

    header("location: cart.php");

?>