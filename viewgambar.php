<a href="forumdis.php"><img src="image/back.jpg" width=30></a>
<?php
// include_once "header.php";
require ('koneksi.php');

    $sql = "SELECT * FROM forumdiskusi WHERE idforum='".$_GET['idforum']."'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $tidforum = $row["idforum"];
    $tjudul = $row["judul"];
    $tusername = $row["username"];
    $tgambar = $row["gambar"];
    $ttanggal = date('l, d-m-Y');

    ?>
    <h1> <?php echo $row["judul"]; ?> </h1>
    <p> <?php echo $row["username"]; ?> </p>
    
    <?php 
        echo "<img src ='$tgambar' width=350 height=250/>";
        echo "<br>$ttanggal</br>";   
  include 'komen.php';
  include_once "footer.php";
?>
