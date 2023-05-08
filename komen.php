<?php
// koneksi ke mysql
session_start();
include "koneksi.php";
$idforum = $_GET['idforum'];

if(isset($_POST['submit'])){
   // $username = $_POST['username'];
   $isi = $_POST['isi'];
   date_default_timezone_set('Asia/Jakarta');
   $tgl = date("Y/m/d h:i:s");
   

   // proses insert komentar ke database
   $query = "INSERT INTO komenforum (idforum, username, isi, tglkomen) VALUES ('".$idforum."','".$_SESSION['username']."','".$isi."','".$tgl."')";   
   if (mysqli_query($conn,$query)) {
    echo " ";
   }  
   else {
    echo  "input data tidak berhasil";
   }
}
// proses yang dilakukan setelah tombol submit komentar diklik
//if ($idforum == "submit")

// proses menampilkan detail forum berdasarkan id forum
// $query = "SELECT * FROM forumdiskusi WHERE idforum = '$idforum'";
// $hasil = mysqli_query($conn, $query);
// $row  = mysqli_fetch_assoc($hasil);
 
// echo "<h1>".$row['judul']."</h1>";
// echo "<p>".$username['username']."</p>";
// echo "<p>".$row['gambar']."</p>";
 
// proses menampilkan komentar berdasarkan id artikelnya
 
echo "<h3>Komentar</h3>";
 
$query = "SELECT * FROM komenforum WHERE idforum = '$idforum' ORDER BY idkomen desc";
$hasil = mysqli_query($conn, $query);
 
if (mysqli_num_rows($hasil) > 0)
{
   // jika ada komentar (jumlah data hasil query > 0), maka tampilkan komentarnya
   while ($row = mysqli_fetch_assoc($hasil))
   {
      date_default_timezone_set('Asia/Jakarta');
      echo "<br><small>".$row['tglkomen']."</small></br>"; 
      echo "<p><small>Username: ".$row['username']."</small></p>";
      echo "<p>".$row['isi']."</p><hr>";
   }
}
// jika tidak ada komentar (jumlah data hasil query = 0), tampilkan keterangan belum ada komentar
else if (mysqli_num_rows($hasil) == 0) echo "<p>Belum ada komentar.</p>";
 
// menampilkan form pengisian komentar
 
echo "<h3>Kirim Komentar</h3>";
 
echo "<form method='post'>";
echo "<table>";
// echo "<tr><td>IDforum</td><td>:</td><td><input type='text' name='idforum'></td></tr>";
// echo "<tr><td>Nama Anda</td><td>:</td><td><input type='text' name='username'></td></tr>";
echo "<tr><td>Komentar Anda</td><td>:</td><td><textarea name='isi'></textarea></td></tr>";
echo "<tr><td></td><td></td><td><input type='submit' name='submit' value='Submit'><input type='hidden' name='idforum' value='".$idforum."'></td></tr>";
echo "</table>";
echo "</form>";


?>