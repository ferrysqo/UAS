<!DOCTYPE html>
<html>
<head>
	<title>Data Pemantauan Covid</title>
</head>
<body>
	<div class="judul">		
		<h2>Data Pemantauan Covid</h2>
		<h3>per
<?php 
date_default_timezone_set('Asia/Jakarta');
echo "".date('d M Y'); 
echo "  ".date('h:i:sa');
?>
		<a href="form_tambah.php">
			<button>+ Tambah Data Baru</button>
		</a>
		</h3>
	</div>

	<br />
	<h3>Data Kendaraan</h3>
	<div style="overflow: auto;">
		<table border="1" class="table">
			<tr>
				<th>Positif.</th>
				<th>Dirawat</th>
				<th>Sembuh</th>
				<th>Meninggal</th>	
			</tr>
			<?php 
			$query = $con->query("SHOW TABLES FROM datacovid2"); // tampil menggunakan method query
			while($data = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td><?php echo $data['Positif']; ?></td>
					<td><?php echo $data['Dirawat']; ?></td>
					<td><?php echo $data['Sembuh']; ?></td>
					<td><?php echo $data['Meninggal']; ?></td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
</body>
</html>