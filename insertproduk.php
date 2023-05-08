<form action="produq.php" method="post" enctype="multipart/form-data">
    <td>Nama Produk</td>
    <input type="text" name="namaproduk" id="namaproduk">
    <td>Harga</td>
    <input type="text" name="harga" id="harga">
    <td>Upload Gambar</td>
    <input type="file" name="gambarproduk" id="gambarproduk">
    <td>Deskripsi</td>
    <input type="text" name="deskripsi" id="deskripsi">
    <td>Kategori</td>
    <!-- <input type="text" name="kodekategori" id="kodekategori">
    <label for="kategori" class="col-sm-2 col-form-label">kategori</label>
                        <div class="col-sm-10"> -->
        <select class="form-control" name="kodekategori" id="kodekategori">
            <option value="">- Pilih Kategori -</option>
            <option value="KAT01">Tanaman Bunga</option>
            <option value="KAT02" >Tanaman Daun</option>
            <option value="KAT03" >Tanaman Akar</option>
            <option value="KAT04" >Tanaman Buah</option>
            <option value="KAT05">Tanaman Batang</option>
        </select>
    <input type="submit" value="submit" name="submit">
</form>