<?php
session_start();
echo $_SESSION['koneksi'];
$judul = "Form Mahasiswa";
include("atas.php");
?>
<form action="save_mahasiswa.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">NIM</label>
    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
   </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
   </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
   </div>



    <!-- NIM :<input type="text" name="nim" /> <br/> -->
    <!-- Nama: <input type="text" name="nama" /> <br/> -->
    <!-- Alamat: <input type="text" name="alamat"/> <br/> -->
    <input class="btn btn-primary" type="submit" value="Kirim"/>
    <input class="btn btn-danger" type="reset" value="Batal"/>
</form>
<?php
include("bawah.php");
?>