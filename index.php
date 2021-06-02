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
	<div align="right">
		(Selamat datang, <?=$_SESSION['username']?>) |   
		<a href="logout.php">
			<span style="color:#ff3333">Logout</span>
		</a>
	</div>
	<h3>Achmad ferrysqo irawan / 181011401138</h3>
	<div style="overflow: auto;">
		<table border="1" class="table">
			<tr>
				<th>Positif.</th>
				<th>Dirawat</th>
				<th>Sembuh</th>
				<th>Meninggal</th>	
			</tr>
			<?php 
			$query = $con->query("SELECT * FROM datacovid2"); // tampil menggunakan method query
			while($data = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td><?php echo $data['Positif']; ?></td>
					<td><?php echo $data['Dirawat']; ?></td>
					<td><?php echo $data['Sembuh']; ?></td>
					<td><?php echo $data['Meninggal']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['Positif']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus.php?id=<?php echo $data['Positif']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
</body>
</html>