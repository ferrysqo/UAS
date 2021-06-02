<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}

include "+koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Covid19</title>
</head>
<body>
	<div class="judul">		
		<h2>data covid19</h2>
		<h3>Data jumlah</h3>
	</div>

	<br />
	<a href="index.php">
		<button>< Lihat Semua Data</button>
	</a>
	
	<h3>Edit Data</h3>
	<form action="proses_edit.php" method="post">
		<?php
		$Positif = $_GET['id'];

		$query = $con->prepare("SELECT * FROM datacovid1"); // tampil menggunakan method prepare
		$query->bindValue(':id', $Positif); // menggunakan binValue

		?>		
		<table>
			<tr>
				<tr>
				<td>Positif</td>
				<td><input type="number" name="Positif" value="<?php echo $data['Positif'] ?>" required></td>					
			</tr>					
			</tr>	
			<tr>
				<td>Dirawat</td>
				<td><input type="number" name="Dirawat" value="<?php echo $data['Dirawat'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Sembuh</td>
				<td><input type="number" name="Sembuh" value="<?php echo $data['Sembuh'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Meninggal</td>
				<td><input type="number" name="Meninggal" value="<?php echo $data['Meninggal'] ?>" required></td>					
			</tr>	

				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>

<!--