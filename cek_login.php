<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$passwordMd5 = md5($password); 

$sql = "select * from user where username='$username'";

$query = mysqli_query($conn, $sql);

$data = mysqli_fetch_array($query);

if($data) {
    if($passwordMd5 == $data['password']) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            echo "Anda berhasil login";
        } else{
            echo "password anda salah";
        }
    } else {
        echo "Username dan password anda salah";
    }



