
<?php
// menghubungkan dengan koneksi
include 'koneksi.php';

echo "<a href='add.php'><button>Tambah Buku</button></a>";

$sql = "SELECT * FROM tabel_buku";
if($result = mysqli_query($koneksi, $sql)){
	if(mysqli_num_rows($result) > 0){

    // output data of each row

		echo "<table border=1>";
		echo "<th>ID BUKU</th>";
		echo "<th>KATEGORI</th>";
		echo "<th>NAMA BUKU</th>";
		echo "<th>HARGA</th>";
		echo "<th>STOK</th>";
		echo "<th>PENERBIT</th>";
		echo "<th>OPERASI</th>";

		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row["idbuku"]."</td>";
			echo "<td>" . $row["kategori"]."</td>";
			echo "<td>" . $row["namabuku"]."</td>";
			echo "<td>" . $row["harga"]."</td>";
			echo "<td>" . $row["stok"]."</td>";
			echo "<td>" . $row["penerbit"]."</td>";
			echo "<td>

			<a href='edit.php?idbuku=". $row["idbuku"]."'><button>EDIT</button></a>

			<a href='delete.php?idbuku=". $row["idbuku"]."'><button>DELETE</button></a>

			</td>";
			echo "</tr>";
		}

			mysqli_free_result($result);
		} else {
			echo "No records matching your query were found.";
		}
	} else {
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
	}

	mysqli_close($koneksi);
	?>


