<?php
include "config.php";

$judul = $_POST["judul"];
$tanggal = $_POST["tanggal"];
$pengarang = $_POST["pengarang"];
$isi = $_POST["isi"];
$imgblog = $_FILES["imgblog"];

// memecah string input berdasarkan karakter '\r\n\r\n'
$pecah = explode("\r\n\r\n", $isi);

// string kosong inisialisasi
$text = "";

// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
// lalu menggabungnya menjadi satu string utuh $text
for ($i=0; $i<=count($pecah)-1; $i++)
{
   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
   $text .= $part;
}
 

$target_dir = "image/blog/";
$namafile = "blogimg" . $pengarang . "." . strtolower(pathinfo($imgblog["name"], PATHINFO_EXTENSION));
$target_file = $target_dir . $namafile;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($imgblog["name"], PATHINFO_EXTENSION));
echo $imageFileType;


// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($imgblog["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($imgblog["size"] > 1000000) {
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
    if (move_uploaded_file($imgblog["tmp_name"], $target_file)) {
        $sql = " INSERT INTO blogg(judulb,tanggalb,pengarangb,isib,image) VALUES ('" . $judul . "','" . $tanggal . "','" . $pengarang . "','" . $text . "','" . $namafile . "')";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('input data berhasil');</script>";
            echo "<script>location='refisiblog.php';</script>";
        } else {
            echo  "input data tidak berhasil";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
