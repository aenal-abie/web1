<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mahasiswa";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

$sql = "update prodi set kode_prodi='$_POST[kode]', 
    nama_prod = '$_POST[prodi]' where kode_prodi='$_GET[kode]';";

$hasil_query = mysqli_query($conn, $sql);

if($hasil_query) {
    echo "Berhasil simpan ke db";
} else {
    echo "gagal simpan ke db". mysqli_error($conn);
}