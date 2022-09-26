<body style="background-color: pink;">
	<?php 
	include 'koneksi.php';

	$idmhs=$_POST['id_mhs'];
	$idprodi=$_POST['id_prodi'];
	$nama=$_POST['nama_mhs'];
	$alam=$_POST['alamat_mhs'];
	$sql="INSERT INTO tbl_mahasiswa VALUES('$idmhs','$idprodi','$nama','$alam')";
	$hasil=mysqli_query($koneksi,$sql);
	if($hasil){
		echo "<h1>data berhasil ditambahkan</h1><br>
		<form method='post' action='koneksi2.php'>
	    	<button type='submit' class='btn btn-outline-success'>SHOW DATA</button>       
	 	</form>";
	}else{
		echo "Data gagal ditambahkan<br>
		<form method='post' action='koneksi2.php'>
	    	<button type='submit' class='btn btn-outline-danger'>TRY AGAIN</button>       
	 	</form>";
	}
	?>
</body>