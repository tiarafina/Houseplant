<?php
session_start();
include "koneksi.php";

$namaproduk = $_POST["namaproduk"];
$harga = $_POST["harga"];
$gambarproduk = $_FILES["gambarproduk"];
$deskripsi = $_POST["deskripsi"];
$kodekategori = $_POST["kodekategori"];

$target_dir = "image/produk/";
$target_file = $target_dir . basename($_FILES["gambarproduk"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo $imageFileType;

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($gambarproduk["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ($gambarproduk["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($gambarproduk["tmp_name"], $target_file)) {
        $sql = " INSERT INTO produk(namaproduk, harga, gambarproduk, deskripsi, kodekategori) VALUES ('" . $namaproduk . "','" .$harga. "','" . $target_file . "','" . $deskripsi . "','" . $kodekategori . "')";
        echo $sql;
        if (mysqli_query($conn,$sql)) {
            print_r ("Berhasil"and header("location: produk.php"));
        } else {
            echo  "input data tidak berhasil";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}