<?php
require ('konek.php');

    $sql = "SELECT*FROM forumdiskusi";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $tidforum = $row["idforum"];
    $tjudul = $row["judul"];
    $tusername = $row["username"];
    $tgambar = $row["gambar"];

    ?>
    <h1> <?php echo $row["judul"]; ?> </h1>
    
        <img src ='image/forum/fordis/<?= $tgambar; ?>' alt="" width="350" height="250"/>
        
  