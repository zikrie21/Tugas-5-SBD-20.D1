<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010069";
$db = "klinik_312010069";
$conn = mysqli_connect("$host","$user","$pass","$db");

if ($conn == false)
{
	echo "Koneksi ke server gagal.";
	die();
}	
?>
