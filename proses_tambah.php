<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
include "+koneksi.php";

$Positif = $_POST['Positif'];
$Dirawat = $_POST['Dirawat'];
$Sembuh = $_POST['Sembuh'];
$Meninggal = $_POST['Meninggal'];

$query = $con->prepare("INSERT INTO datacovid1 ('Positif', 'Dirawat', 'Sembuh', 'Meninggal') 
                        VALUES (':Positif', :'Dirawat', ':Sembuh', ':Meninggal')");

$query->bindparam(':Positif', $Positif);
$query->bindparam(':Dirawat', $Dirawat);
$query->bindparam(':Sembuh', $Sembuh);
$query->bindparam(':Meninggal', $Meninggal);


?>