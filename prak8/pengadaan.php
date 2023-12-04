<?php

include 'koneksi.php';


$sql = "SELECT namabuku, penerbit, MIN(stok) as stok FROM tabel_buku";

$result = $koneksi->query($sql);

// echo "<a href='http://localhost/unibookstore/addpenerbit.php'><button>Tambah Penerbit</button></a>";
// echo "<a href='http://localhost/unibookstore/adminbuku.php'><button>Tampilan Buku</button></a>";
if ($result->num_rows > 0) {

    // output data of each row

    echo "<table border=1 style='width:60%';>";

    echo "<th>JUDUL NAMA</th>";
    echo "<th>NAMA PENERBIT</th>";
    echo "<th>STOK</th>";
    // echo "<th>KOTA</th>";
    // echo "<th>TELEPON</th>";

    // echo "<th>OPERASI</th>";

    while($row = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" . $row["namabuku"]."</td>";
        echo "<td>" . $row["penerbit"]."</td>";
        echo "<td>" . $row["stok"]."</td>";
        // echo "<td>" . $row["Kota"]."</td>";
        // echo "<td>" . $row["Telepon"]."</td>";

        // echo "<td>

        // <a href='editpenerbit.php?idpenerbit=". $row["IDPenerbit"]."'><button>EDIT</button></a>

        // <a href='deletepenerbit.php?idpenerbit=". $row["IDPenerbit"]."'><button>DELETE</button></a>

        // </td>";

        echo "</tr>";

    }

    echo "</table>";

} else {

    echo "0 results";

}

$koneksi->close();
?>
