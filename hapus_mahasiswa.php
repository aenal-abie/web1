<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mahasiswa";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}  

$sql = "delete from mahasiswa where nim='$_GET[nim]'";


$hasil_query = mysqli_query($conn, $sql);

if($hasil_query) {
    echo "Berhasil hapus ke db";
} else {
    echo "gagal hapus ke db". mysqli_error($conn);
}