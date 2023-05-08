<?php
include "koneksi.php";
?>


    <div class="container" style="margin-top:20px">
        <center><font size="6">Profile Toko</font></center>
        <hr>
        <!-- <a href="tambahumkm.php"><button class="btn btn-dark right">Tambah Data</button></a> -->
        <a href="media.php"><button class="btn btn-warning">Kembali</button></a>
        <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>No.</th>
                    <!-- <th>idtoko</th> -->
                    <th>Nama Toko</th>
                    <th>Jalan</th>
                    <th>Kota</th>
                    <th>Provinsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel umkm urut berdasarkan id yang paling besar
                $sql = mysqli_query($conn, "SELECT * FROM pengguna WHERE gakses==0) or die(mysqli_error($conn));
                
                if(mysqli_num_rows($sql)>0){
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)){
                        echo '
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$data['username'].'</td>
                            <td>'.$data['nama'].'</td>
                            <td>'.$data['jalan'].'</td>
                            <td>'.$data['kota'].'</td>
                            <td>'.$data['provinsi'].'</td>
                            <td>
                                <a href="deleteumkm.php"?idtoko='.$data['idtoko'].' class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
                            </td>
                        </tr>
                        ';
                        $no++;
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