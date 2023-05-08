<?php
include "koneksi.php";
session_start();

$username = $_SESSION["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$jalan = $_POST["jalan"];
$kota = $_POST["kota"];
$provinsi = $_POST["provinsi"];
$jk = $_POST["jk"];
$sql  = "UPDATE pengguna SET email = '$email',  password = '$password',  nama = '$nama',  jalan = '$jalan' , kota = '$kota', provinsi = '$provinsi', jk = '$jk' WHERE username = '$username'";
// echo "$sql";
if (mysqli_query($conn, $sql)) {
    echo  "update data berhasil";
} else {
    echo  "input data tidak berhasil";
}



/*
$target_dir = "image/reseller/";
$namafile = "profileimg" . $phone . "." . strtolower(pathinfo($imgprofile["name"], PATHINFO_EXTENSION));
$target_file = $target_dir . $namafile;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($imgprofile["name"], PATHINFO_EXTENSION));
echo $imageFileType;


// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($imgprofile["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($imgprofile["size"] > 1000000) {
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
    if (move_uploaded_file($imgprofile["tmp_name"], $target_file)) {
        $sql = " INSERT INTO data_reseller(name,email,phone,password,image,id_access) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $password . "','" . $namafile . "','0')";
        echo $sql;
        if (mysqli_query($con, $sql)) {
            echo "input data berhasil";
        } else {
            echo  "input data tidak berhasil";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
