<!doctype html>
<html lang="en">    

    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
<?php
session_start();

// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "<pre>";

$koneksi = new mysqli("localhost", "root", "", "test");

if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang']))
{
    echo "<script>alert('keranjang kosong, silahkan pilih produk');</script>";
    echo "<script>location='viewproduk.php';</script>";

}
?>
<!-- 
<!DOCTYPE html>
<html> -->
<head>
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="admin/css/style.css">
</head>
<body>
<a href="viewproduq.php"><img src="image/back.jpg" width=30></a></br></br>
    <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1; ?>
                <?php $total = 0; ?>
                <?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
                <!-- menampilkan produk -->
                <?php
                $ambil=$koneksi->query("SELECT * FROM produk WHERE kodeproduk='$id_produk'");
                $pecah=$ambil->fetch_assoc();
                $subtotal=$pecah['harga']*$jumlah;
                // echo "<pre>";
                // print_r($pecah);
                // echo "<pre>";    
                ?>
                <tr>
                    <td><?php echo $nomor;?></td>
                    <td class="col-12 col-lg-2"><?php echo $pecah['namaproduk'];?></td>
                    <td class="col-12 col-lg-2"><img src='<?php echo $pecah['gambarproduk']?>' width="70"/></td>
                    <td class="col-12 col-lg-2">Rp. <?php echo number_format($pecah['harga']);?></td>
                    <td class="col-12 col-lg-3"><?php echo $jumlah;?></td>
                    <td class="mb-0">Rp. <?php echo number_format($subtotal);?></td>
                    <td>
                        <a class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a href="hapuscart.php?kodeproduk=<?php echo $id_produk?>" class="btn btn-dark rounded-0 btn-ecomm"><i class='bx bx-x-circle'></i> Remove</a>
                    </td>
                </tr>
                <?php 
                $total+=$subtotal;
                ?> 
                <?php $nomor++; ?>
                <?php endforeach?>

                <tr>
                    <th colspan="5">Total</th>
                    <th>Rp. <?php echo number_format($total)?></th>

            </tbody>
    </table>
    <class="d-grid p-3 border-top">	<a href="checkout.php" class="btn btn-dark btn-ecomm">checkout</a>

    <!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>

    <?php include "footer.php"; ?>
</body>
</html>