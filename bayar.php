<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "test");

include 'header.php';



?>

<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
</head>
<body>
    <div class="container">
        <h5>Konfirmasi Pembayaran<h5>

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="jenisbayar" class="col-sm-2 col-form-label">Pilih</label>
                <div class="col-sm-10">
                <select class="form-control" name="jenisbayar" id="jenisbayar">
                    <option value="">- Metode Pembayaran -</option>
                    <option value="0">Bank BRI</option>
                    <option value="1" >Bank Mandiri</option>
                    <option value="2" >Bank BCA</option>
                    <option value="3" >Jenius</option>
                    <option value="4">Dana</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label>Nama Akun Pengirim</label>
                <input type="text" class="form-control" name="namabyr">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="text" class="form-control" name="jumlahbyr">
            </div>
            <div class="form-group">
                <label>Bukti Pembayaran/label>
                <input type="file" class="form-control" name="buktibyr">
            </div>
            <input type="submit" name="kirim">
        </form>
    </div>

<?php

if(isset($_POST["kirim"]))
{
    $namabukti= $_FILES["buktibyr"]["name"];
    $lokasibukti= $_FILES["buktibyr"]["tmp_name"];
    $namafiks=date("YmdHis").$namabukti;
    move_uploaded_file($lokasibukti,"image/pembayaran/$namafiks");
    
    $jenisbayar= $_POST["jenisbayar"];
    $namabyr= $_POST["namabyr"];
    $jumlahbyr= $_POST["jumlahbyr"];
    $buktibyr= $_FILES["buktibyr"];
    $username= $_SESSION["username"];

    $koneksi->query("INSERT INTO pembayaran(jenisbayar, namabyr, jumlahbyr, buktibyr, username) VALUES ('$jenisbayar','$namabyr','$jumlahbyr','$namafiks', '$username')");
}
    if ($koneksi) {
        echo "Bukti pembayaran terkirim";
    } else {
        echo  "input data tidak berhasil";
    }

?>

</body>
</html>