<a href="index.php"><img src="image/back.jpg" width=30></a></br></br>
<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>forum</title>
</head>
<body>
<a href="diskusi.php">Upload Forum</a>
	<?php 
		$sql = "SELECT*FROM forumdiskusi";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)) { ?>
	<a href="viewgambar.php?idforum=<?php echo $row['idforum']; ?>">
		<h1> <?php echo $row['judul']; ?></h1>
	</a>
		<p> <?php echo $row['username']; ?></p>
		<p> <?php echo $row['tglforum']; ?></p>
		<p><?php echo "<img src='$row[gambar]' width=350 height=250 />";?></p>
	<a href="viewgambar.php?idforum=<?php echo $row['idforum']; ?>">
		<h5>Readmore</h5>
	</a>
	
	<?php } ?>
</body>
</html>