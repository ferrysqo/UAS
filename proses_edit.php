<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
include "+koneksi.php";

$params = [
    "Positif"        => $_POST['Positif'],
    "Dirawat"     => $_POST['Dirawat'],
    "Sembuh"      => $_POST['Sembuh'],
    "Meninggal"     => $_POST['Meninggal'],
  ];

$sql = "UPDATE datacovid1 SET
            Positif = :Positif,
            Dirawat = :Dirawat,
            Sembuh = :Sembuh,
            Meninggal = :Meninggal";
			
$query = $con->prepare($sql);
if($query->execute($params)) { // prepare > execute menggunakan parameter array
    echo "<script>alert('Data berhasil diedit'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>