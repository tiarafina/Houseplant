<?php
include "header.php";
?>

<form action="formdiskusi.php" method="post" enctype="multipart/form-data">
<div class="mb-2 row">
     <label for="judul" class="col-sm-4 col-form-label">Apa yang ingin Anda diskusikan?</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="judul" name="judul">
    </div>
</div>
<div class="mb-2 row">
     <label for="gambar" class="col-sm-4 col-form-label">Upload Gambar</label>
    <div class="col-sm-5">
        <input type="file" class="form-control" id="gambar" name="gambar">
    </div>
</div>
<div class="col-20">
        <input type="submit" name="submit" value="submit" class="btn btn-primary" />
</div>
</form>

 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

