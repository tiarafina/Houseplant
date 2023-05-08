<?php
include "koneksi.php";
session_start();

if (isset($_POST ['submit'])){
    $username=mysqli_escape_string($conn, $_POST['username']);
    $password=mysqli_escape_string($conn, $_POST['password']);
    $sql= "select * from pengguna WHERE username='". $username."' and password ='". $password."'";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result)>0){
        $_SESSION['username']= $row['username'];
        $_SESSION['nama']= $row['nama'];
        $_SESSION['gakses']= $row['gakses'];

        // header("location: dashboardcust.php");
        
        if($_SESSION['gakses']== 0)
            header("location: toko/menu.php");
        elseif($_SESSION['gakses']== 1)
            header("location: dashboardcust.php");
        else
            header("location: dashboardcust.php");
        
    }
    else {
        echo "username atau password salah";
    }
}
?> 