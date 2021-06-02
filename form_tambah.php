<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kendaraan | Web Pendataan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
</head>
<body>
	<div class="judul">		
		<h2>Web Pendataan Kehilangan Kendaraan Bermotor Roda 2</h2>
		<h3>Polrestabes Semarang</h3>
	</div>

	<br />
	<a href="index.php">
		<button>< Lihat Semua Data</button>
	</a>

	<h3>Input Kendaraan Baru</h3>
	<form action="proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>Positif</td>
				<td><input type="number" name="Positif" required></td>					
			</tr>	
			<tr>
				<td>Dirawat</td>
				<td><input type="number" name="Dirawat" required></td>					
			</tr>	
			<tr>
				<td>Sembuh</td>
				<td><input type="number" name="Sembuh" required></td>					
			</tr>	
			<tr>
				<td>Meninggal</td>
				<td><input type="number" name="Meninggal" required></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>

-->