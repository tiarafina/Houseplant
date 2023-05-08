<?php
require('koneksi.php');
include "header.php";
// include "menu.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>


                  <div class="col-lg-8">
<!-- untuk mengeluarkan data -->
                    <div class="card">
                        <div class="card-header text-white bg-secondary">
                            Data Produk
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama produk</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Kategori</th>
                                        
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql2   = "select * from produk order by kodeproduk desc";
                                    $q2     = mysqli_query($conn, $sql2);
                                    $urut   = 1;
                                    while ($r2 = mysqli_fetch_array($q2)) {
                                        $kodeproduk = $r2['kodeproduk'];
                                        $namaproduk = $r2['namaproduk'];
                                        $harga      = $r2['harga'];
                                        $gambarproduk = $r2['gambarproduk'];
                                        
                                        $deskripsi  = $r2['deskripsi'];
                                        
                                        $kodekategori= $r2['kodekategori'];

                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $urut++ ?></th>
                                            <td scope="row"><?php echo $namaproduk ?></td>
                                            <td scope="row">Rp.<?php echo $harga ?></td>
                                            <td scope="row"><img src="<?php echo $gambarproduk?>" width="60"></td>
                                            <td scope="row"><?php echo $deskripsi ?></td>
                                            <td scope="row"><?php echo $kodekategori ?></td>
                                            
                                            <td scope="row">
                                                <a href="editproduk1.php?prod=edit&kodeproduk=<?php echo $kodeproduk ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                                <a href="toko/hapusproduk.php?prod=delete&kodeproduk=<?php echo $kodeproduk?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                  </div>

 
</body>
</html>