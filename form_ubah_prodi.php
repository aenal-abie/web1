<?php
$servername = "localhost";
$username = "zaenal1";
$password = "masuk123";
$db = "mahasiswa";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

$sql = "select * from prodi where kode_prodi='$_GET[kode]'";
$hasil_query = mysqli_query($conn, $sql);

$data = mysqli_fetch_array($hasil_query);
//print_r($data);

?>

<form action="update_prodi.php?kode=<?php echo $_GET['kode'] ?>" method="post">
    Kode Prodi :<input type="text" name="kode" value="<?php echo $data[0] ?>" /> <br/>
    Nama Prodi: <input type="text" name="prodi" value="<?php echo $data[1] ?>" /> <br/>
    <input type="submit" value="Kirim"/>
</form>