<?php 
// Create connection
$koneksi = mysqli_connect("localhost", "root", "", "data");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi Database Gagal: " . mysqli_connect_error();
}
?>