<!DOCTYPE html>
<html>
<head>
	<title>Membuat Database Tamu</title>
</head>
<body>
	<!--menampilkan tulisan dengan format tulisan heading 1-->
	<h1>TUGAS 1</h1>
	<?php
		//memanggil file tugas1koneksi.php
		include "koneksi1.php";
		//memanggil file tugas1buattabel.php
		include "tabel1.php";
		//memanggil file tugas1insert.php
		include "insert1.php";
		//menutup koneksi
		mysqli_close($conn);
	?>
</body>
</html>
