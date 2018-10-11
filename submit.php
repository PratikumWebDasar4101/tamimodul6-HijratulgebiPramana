<?php
session_start();
require_once("db.php");

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $kelas = $_POST["kelas"];
    $jk = $_POST["jk"];
    $hobi = $_POST["hobi"];
    $fakultas = $_POST["fak"];
    $alamat = $_POST["alamat"];

    $inputlagi = "<br><a href='register.php'>Input Lagi</a>";
	$br = "<br>";
	if (strlen($nama) > 35 || $nama == "") {
		$_SESSION["pesan_nama"] = "Nama harus dibawah 35 huruf.";
		header("Location: register.php");
	}
	if (!is_numeric($nim) || strlen((string)$nim) > 10) {
		$_SESSION["pesan_nim"] = "Nim harus angka dan 10 digit kebawaj.";
		header("Location: register.php");
	}else {
        $sql = "INSERT INTO user VALUES ('$username','$password','$nama',$nim,'$kelas','$jk','" . implode(",",$hobi) . "','$fakultas','$alamat')";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            echo "Data baru berhasil dibuat";
            echo "Silahkan <a href='login.php'>login</a>";
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}