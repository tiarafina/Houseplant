<?php
include "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$nohp = $_POST["nohp"];
$jk = $_POST["jk"];
$sql = " INSERT INTO pengguna (username, password, nama, email, nohp, jk) VALUES ('" . $username . "','" . $password . "','" . $nama . "','" . $email . "','" . $nohp . "','" . $jk . "')";
echo "$sql";
if (mysqli_query($conn, $sql)) {
    if($_SESSION['grup']== 0)
    header("location: toko/menu.php");
    elseif($_SESSION['grup']== 1)
    header("location: dashboardcust.php");
    else
    header("salah");
} 
else {
    echo  "Regist tidak berhasil";
}