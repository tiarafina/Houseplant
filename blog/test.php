<form action="blog.php" method="post" enctype="multipart/form-data">
    Masukkan Judul Blog :
    <br>
    <input type="text" name="judul" id="judul">
    <br>
    pilih tanggal buat :
    <br>
    <input type="date" name="tanggal" id="tanggal">
    <br>
    Masukkan Nama Anda :
    <br>
    <input type="text" name="pengarang" id="pengarang">
    <br>
    Tuliskan Isi Blog:
    <br>
    <textarea name="isi" cols="150" rows="20"></textarea><br>
    <br>
    Pilih gambar :
    <br>
    <input type="file" name="imgblog" id="imgblog">
    <br>
    <input type="submit" value="submit" name="submit">
</form>