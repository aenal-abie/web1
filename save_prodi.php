<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mahasiswa";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

$sql = "insert into prodi(kode_prodi, nama_prod) value ('$_POST[kode]', 
'$_POST[prodi]');";

$hasil_query = mysqli_query($conn, $sql);

if($hasil_query) {
    echo "Berhasil simpan ke db";
} else {
    echo "gagal simpan ke db". mysqli_error($conn);
}