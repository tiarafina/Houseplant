
<?php 
session_start();
$koneksi = new mysqli("localhost", "root", "", "test");
include "header.php";
// if(!isset($_SESSION['username']) OR empty($_SESSION['pelanggan']))
// {
//     echo "<script>alert('anda perlu login');</script>";
//     echo "<script>location='login.php';</script>";

// }

?>
<!DOCTYPE html>
<html>
<head>
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
    <title>checkout</title>


</head>
<body>
    <?php if(isset($_SESSION["username"]))?>
            <table border="4">
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
                            <td class="col-12 col-lg-2"><?php echo $jumlah;?></td>
                            <td class="col-12 col-lg-3">Rp. <?php echo number_format($subtotal);?></td>
                            
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
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" readonly value="<?php echo $_SESSION['username']?>" class="form-control">
                            </div>
                        </div>

                    </div>
                </form>

            <class="d-grid p-3 border-top">	<a href="bayar.php" class="btn btn-dark btn-ecomm">Bayar</a>

            <?php include "footer.php";?>
</body>
</html>