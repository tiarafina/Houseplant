<?php
session_start();
include "koneksi.php";

$judul = $_POST["judul"];
// $username = $_POST["username"];
$gambar = $_FILES["gambar"];
$tanggal = date('Y-m-d');
/*echo "$sql";*/

$target_dir = "image/forum/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo $imageFileType;

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($gambar["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($gambar["size"] > 1000000) {
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
    if (move_uploaded_file($gambar["tmp_name"], $target_file)) {
        $sql = " INSERT INTO forumdiskusi(judul, username, gambar, tglforum) VALUES ('" . $judul . "','" .$_SESSION['username']. "','" . $target_file . "','" . $tanggal . "')";
        
        // echo $sql;
        if (mysqli_query($conn,$sql)) {
            print_r ("Berhasil"and header("location: forumdis.php"));
        } else {
            echo  "input data tidak berhasil";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}