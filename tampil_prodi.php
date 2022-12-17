<?php
$judul = "Data Prodi";
include "koneksi.php";
include "atas.php";

$sql = "select * from prodi";
$hasil_query = mysqli_query($conn, $sql);
// AMBIL DENGAN NUMERIK ARRAY
echo "<table border=1  class='table' >";
echo "<tr><td>Kode Prodi</td><td>NAMA Prodi</td><td>Aksi</td></tr>";
while($data = mysqli_fetch_array($hasil_query)) {
   echo "<tr>";
    echo "<td>$data[0]</td>";
    echo "<td>$data[1]</td>";
    echo "<td>
            <a href='hapus_prodi.php?kode=$data[0]'>Hapus</a> | 
            <a href='form_ubah_prodi.php?kode=$data[0]'>Ubah</a>
          </td>";
   echo "</tr>";
}
echo "</table>";
include "bawah.php"
?>