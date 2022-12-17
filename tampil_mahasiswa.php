<?php
$judul = "Data Mahasiwa";
// include("atas.php");
include "koneksi.php";

$sql = "select * from mahasiswa order by nama desc, nim asc";
$hasil_query = mysqli_query($conn, $sql);
// AMBIL DENGAN NUMERIK ARRAY
echo "<h2>Data Mahasiswa</h2>";
echo "<b class=\"biru\">Ini detail mahasiswa saya</b>";
echo "<table class='table table-striped thead-light'>";
echo "<thead class='thead-dark'><th>NIM</th><th>NAMA</th><th>Alamat</th><th>Aksi</th></th></thead>";
while($data = mysqli_fetch_array($hasil_query)) {
   echo "<tr>";
    echo "<td>$data[0]</td>";
    echo "<td>$data[1]</td>";
    echo "<td>$data[2]</td>";
    echo "<td><a href='hapus_mahasiswa.php?nim=$data[0]'>Hapus</a>
    <a style=\"color:yellow\" class=\"biru tebal_sekali\" id=\"hijau\" href='ubah_mahasiswa.php?nim=$data[0]'>Ubah</a>
    </td>";
   echo "</tr>";
}
echo "</table>";

//AMBIL DATA DENGAN ASSOSIATIVE ARRAY
// $hasil_query = mysqli_query($conn, $sql);
// echo "<table border=1>";
// echo "<tr><td>NIM</td><td>NAMA</td><td>Alamat</td></tr>";
// while($row = mysqli_fetch_assoc($hasil_query)) {
//     echo "<tr>";
//     echo "<td>$row[nim]</td>";
//     echo "<td>$row[nama]</td>";
//     echo "<td>$row[alamat]</td>";
//    echo "</tr>";
// }
// echo "</table>";
// include("bawah.php")
?>