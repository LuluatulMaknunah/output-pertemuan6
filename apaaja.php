<?php
$koneksi=mysqli_connect("localhost","root","");
if ($koneksi){
	echo"berhasil melakukan koneksi";
}else{
	echo"gagal melakukan koneksi";
}
?>