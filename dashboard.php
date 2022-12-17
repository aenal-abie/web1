<?php
session_start();
if($_SESSION['login']) {
    echo $_SESSION['username'];
} else {
    echo "Anda harus login";
}
