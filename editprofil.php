<?php
require_once("db.php");
session_start();

if(isset($_SESSION["user_nim"])) {
	$nim = $_SESSION["user_nim"];
    $sql = "SELECT * FROM user WHERE nim=$nim";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<header>
    <table align="center">
    <td align="center">
    <a href="index.php">Awal</a> -
    <a href="daftarposting.php">Daftar Posting</a> - 
    <a href="semuaposting.php">Semua Posting</a> - 
    <a href="editprofil.php">Edit Profil</a> - 
    <a href="posting.php">Post</a> - 
    <a href="logout.php">Logout</a>
    <hr>
    </td>
    </table>
    </header>
<form action="update.php" method="post">
        <table align="center">
			<tr>
				<center><h3>Edit Profil</h3></center>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
                    <input type="text" name="nama" value="<?php echo $row["nama"] ?>">
                    <?php if(isset($_SESSION["pesan_nama"])) { ?>
                    <p><?php echo $pesan_nama ?></p>
                    <?php } ?>
                </td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>
                    <input type="text" value="<?php echo $row["nim"] ?>" disabled>
                </td>
			</tr>
			<tr>
				<td>Kelas :</td>
				<td>
					<input type="radio" name="kelas" value="D3 MI 41-01" <?php if($row["kelas"] == "D3 MI 41-01"):echo "checked"; endif ?>>D3 MI 41-01 <br>
					<input type="radio" name="kelas" value="D3 MI 41-01" <?php if($row["kelas"] == "D3 MI 41-01"):echo "checked"; endif ?>>D3 MI 41-01 <br>
					<input type="radio" name="kelas" value="D3 MI 41-01" <?php if($row["kelas"] == "D3 MI 41-01"):echo "checked"; endif ?>>D3 MI 41-01 <br>
					<input type="radio" name="kelas" value="D3 MI 41-01" <?php if($row["kelas"] == "D3 MI 41-01"):echo "checked"; endif ?>>D3 MI 41-01
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<input type="radio" name="jk" value="laki-laki" <?php if($row["jk"] == "laki-laki"):echo "checked"; endif ?>>Laki-laki <br>
					<input type="radio" name="jk" value="perempuan" <?php if($row["jk"] == "perempuan"):echo "checked"; endif ?>>Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobi :</td>
                <?php $hobi = explode(",",$row["hobi"]); ?>
				<td>
					<input type="checkbox" name="hobi[]" value="menyanyi" <?php if(in_array("Olahraga",$hobi)):echo "checked"; endif ?>>menyanyi <br>
					<input type="checkbox" name="hobi[]" value="Membaca" <?php if(in_array("Membaca",$hobi)):echo "checked"; endif ?>>Membaca <br>
					<input type="checkbox" name="hobi[]" value="Menulis" <?php if(in_array("Menulis",$hobi)):echo "checked"; endif ?>>Menulis <br>
					<input type="checkbox" name="hobi[]" value="menonton" <?php if(in_array("menonton",$hobi)):echo "checked"; endif ?>>menonton <br>
					<input type="checkbox" name="hobi[]" value="mendaki" <?php if(in_array("mendaki",$hobi)):echo "checked"; endif ?>>mendaki<br>
				</td>
			</tr>
			<tr>
				<td>Fakultas :</td>
				<td>
					<select name="fak">
						<option <?php if($row["fakultas"] == "fakultas ilmu terapan"):echo "selected";endif ?>>fakultas ilmu terapan</option>
						<option <?php if($row["fakultas"] == "fakultas komunikasi bisnis"):echo "selected";endif ?>>fakultas komunikasi bisnis</option>
						<option <?php if($row["fakultas"] == "fakultas rekaysa industri"):echo "selected";endif ?>>fakultas rekaysa industri</option>
						<option <?php if($row["fakultas"] == "fakultas elekto"):echo "selected";endif ?>>fakultas elekto</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><textarea name="alamat" id="" cols="26" rows="1"><?php echo $row["alamat"] ?></textarea></td>
			</tr>
			<tr>
                <input type="hidden" name="nim" value="<?php echo $row["nim"] ?>">
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>
        </table>
    </form>
</body>
</html>
<?php 
}else {
    echo "Belum Membuat Akun";
} ?>