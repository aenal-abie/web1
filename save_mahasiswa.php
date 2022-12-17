<?php
$judul ="Simpan data";
include("atas.php");
include "koneksi.php";

$sql = "insert into mahasiswa(nim, nama, alamat) value ('$_POST[nim]', 
'$_POST[nama]', '$_POST[alamat]');";

$hasil_query = mysqli_query($conn, $sql);

if($hasil_query) {
    echo "Berhasil simpan ke db";
} else {
    echo "gagal simpan ke db". mysqli_error($conn);
}
echo "<a href=\"index_mahasiswa.php\">Kembali</a>";
include("bawah.php");