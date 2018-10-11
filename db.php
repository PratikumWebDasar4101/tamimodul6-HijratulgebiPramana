<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "isi";
$conn = mysqli_connect($host,$username,$password,$db_name);
if (!$conn) {
    die("Gagal: " . mysqli_connect_error());
}
?>