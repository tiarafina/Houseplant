<?php
include "konek.php";
session_start();

if (isset($_POST ['submit'])){
    $idorder=mysqli_escape_string($conn, $_POST['idorder']);
    $tgl=mysqli_escape_string($conn, $_POST['date']);
    $sql= "select * from statusorder WHERE idorder='". $idorder."' and date ='". $tgl."'";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result)>0){
        $_SESSION['idorder']= $row['username'];
        $_SESSION['date']= $row['date'];
        $_SESSION['status']= $row['status'];
        
        if($_SESSION['status']== 0)
            header("Sedang di prosess");
        elseif($_SESSION['status']== 1)
            header("Sudah dibayar");
        else
            header("Belum dibayar");
        
    }
    /*else {
        echo "username atau password salah";
    }*/
}
?> 