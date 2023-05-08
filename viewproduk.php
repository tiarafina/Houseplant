<?php include "header.php"; ?>
<a href="index.php"><img src="image/back.jpg" width=30></a></br></br>
<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Produk</title>
</head>
<body>
	<?php 
		$sql = "SELECT*FROM produk";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)) { ?>
		</br><h4> <?php echo $row['namaproduk']; ?></h4>
		<h6><?php echo "Rp. ". $row['harga']; ?></h6>

		<p><?php echo "<img src='$row[gambarproduk]' width=350 height=250 />";?></p>
	<a href="tampilproduk.php?kodeproduk=<?php echo $row['kodeproduk']; ?>">
		<p>Detil Produk</p>
	</a>
	<a href="beli.php?kodeproduk=<?php echo $row['kodeproduk']; ?>">
		<p>Masukkan Keranjang</p>
	</a>
	
	<?php } ?>
</body>
</html>