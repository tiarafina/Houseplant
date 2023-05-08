<!DOCTYPE html>
<html lang="en">

<?php
include "../myhouseplant/admin/koneksihp.php";
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>House Plants</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <div class="container" style="margin-top:20px">
        <center><font size="6">About Us</font></center>
        <hr>
        <a href="media.php"><button class="btn btn-info">Kembali</button></a>
        <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Alamat Perusahaan</th>
                    <th>Kontak Perusahaan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel customer urut berdasarkan id yang paling besar
                $sql = mysqli_query($conn, "SELECT * FROM kontak ORDER BY id_kontak  DESC") or die(mysqli_error($conn));
                
                if(mysqli_num_rows($sql)>0){
                    $no = 1;
                    while($data = mysqli_fetch_array($sql)){
                        echo '
                        <tr>
                            <td>'.$data['nama_per'].'</td>
                            <td>'.$data['alamat_per'].'</td>
                            <td>'.$data['kontak_per'].'</td>
                        </tr>
                        ';
                    }
                }else{
                    echo '
                    <tr>
                        <td colspan="6">Tidak ada data.</td>
                    </tr>
                    ';    
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>    
</html>
</body>