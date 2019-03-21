
<html>
<body>
<h1> Tabel Menu</h1>
</body>
</html>
<?php
include'konfigurasi_database.php';
 
$query = mysqli_query($conn, 'select * from tbl_menu');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id_menu'] = $row["id_menu"];
		$data['nama'] = $row["nama"];
		$data['kategori'] = $row["kategori"];
		$data['harga'] = $row["harga"];
	array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}

?>


<html>
<body>
<h1> Tabel User</h1>
</body>
</html>
<?php
$query = mysqli_query($conn, 'select * from user');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id_user'] = $row["id_user"];
		$data['nama_user'] = $row["nama_user"];
		$data['password'] = $row["password"];
		$data['status'] = $row["status"];
	array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}

?>

<html>
<body>
<h1> Tabel Transaksi</h1>
</body>
</html>


<?php
$query = mysqli_query($conn, 'select * from transaksi');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id_transaksi'] = $row["id_transaksi"];
		$data['id_menu'] = $row["id_menu"];
		$data['jumlah_beli'] = $row["jumlah_beli"];
		$data['jumlah_pesanan'] = $row["jumlah_pesanan"];
		$data['total_bayar'] = $row["total_bayar"];
	array_push($responsistem["data"], $data);
 
	}
	echo json_encode($responsistem);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}

?>