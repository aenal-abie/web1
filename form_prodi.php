<?php $judul = "Form Prodi"; include "atas.php"?>

<form action="save_prodi.php" method="post">
    Kode Prodi :<input type="text" name="kode" /> <br/>
    Nama Prodi: <input type="text" name="prodi" /> <br/>
    <input type="submit" value="Kirim"/>
</form>

<?php include "bawah.php"; ?>