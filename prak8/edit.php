<?php
// menghubungkan dengan koneksi
include 'koneksi.php';

// Attempt select query execution
$sql = "SELECT * FROM tabel_buku WHERE idbuku='".$_GET['idbuku']."'";
if($result = mysqli_query($koneksi, $sql)){
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$idbuku = $row['idbuku'];
			$kategori = $row['kategori'];
			$namabuku = $row['namabuku'];
			$harga = $row['harga'];
			$stok = $row['stok'];
			$penerbit = $row['penerbit'];
		}
        // Free result set
		mysqli_free_result($result);
	} else{
		echo "No records matching your query were found.";
	}
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
}

if (sizeof($_POST)!=0) {
	$idbuku = $_POST['idbuku'];
	$kategori = $_POST['kategori'];
	$namabuku = $_POST['namabuku'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$penerbit = $_POST['penerbit'];


	$sql = "UPDATE tabel_buku SET kategori='$kategori', namabuku='$namabuku', harga='$harga', stok='$stok', penerbit='$penerbit' WHERE idbuku='".$_POST['idbuku']."'";


	if (mysqli_query($koneksi, $sql)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($koneksi);
	}


}
// Close connection
mysqli_close($koneksi);

?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
	<h1>EDIT</h1>
	<div class="">
		<form action="edit.php?idbuku=<?php echo $idbuku;?>" method="post" >
			<div class="row">
				<div class="col-25">
					<label for="idbuku">ID Buku:</label>
				</div>
				<div class="col-75">
					<input id="idbuku" type="text" name="idbuku" value="<?php echo $idbuku; ?>" readonly>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="kategori">Kategori:</label>
				</div>
				<div class="col-75">
					<input id="kategori" type="text" name="kategori" value="<?php echo $kategori;?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="namabuku">Nama Buku:</label>
				</div>
				<div class="col-75">
					<input id="namabuku" type="text" name="namabuku" value="<?php echo $namabuku;?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="harga">Harga:</label>
				</div>
				<div class="col-75">
					<input id="harga" type="float" name="harga" value="<?php echo $harga;?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="stok">Stok:</label>
				</div>
				<div class="col-75">
					<input id="stok" type="number" name="stok" value="<?php echo $stok;?>">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="penerbit">Penerbit:</label>
				</div>
				<div class="col-75">
					<input id="penerbit" type="text" name="penerbit" value="<?php echo $penerbit;?>">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-75">
					<button>EDIT</button></a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>