<?php
include 'konek.php';

function detailForum($idforum)
{
	global $conn;

	$query = "SELECT * FROM forumdiskusi WHERE id = '$idforum' ";
	$res   = mysqli_query($conn, $query);

	$row   = mysqli_fetch_assoc($res);

	return $row;
}

function tampilKomen($idforum)
{
	global $conn;

	$query = "SELECT * FROM komenforum WHERE idforum = '$idforum' ";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}

$rowForum  = detailForum($idforum);
$rowKomen = tampilKomen($_GET['idkomen']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forum Komen Mysqli</title>
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
</head>
<body>
	
	<div class="container">
		<h3><?= $rowForum['judul'] ?></h3>
		<p>
			<?= $rowKomen['isi'] ?>
		</p>
		<hr>
		<form method="post">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Isi Komentar</label>
				<textarea name="isi" class="form-control" rows="5"></textarea>
			</div>
			<button class="btn btn-primary" type="submit" name="btnkomen">
				Masukkan Komentar
			</button>
		</form>
		<hr>
		<?php
			if (isset($_POST['btnkomen'])) {
				postKomentar($_POST, $_GET['id']);

				echo "<meta http-equiv='refresh' content='1.5;url=detail.php?id=".$rowForum['isi']."'>";
			}
		?>
		<!-- <div class="alert alert-success">asdasd</div> -->
		<?php foreach ($rowKomen as $row): ?>
			
			<div class="well">
				<b><?= $row['username'] ?></b> <br>
				<p><?= $row['isi'] ?></p>
			</div>
		<?php endforeach ?>
		<hr>
		<a href="index.php">
			<button class="btn btn-default">
				Kembali
			</button>
		</a>
		<hr>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>