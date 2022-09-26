<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OUTPUT PERTEMUAN 3</title>
	<style type="text/css">
	body{
		background-image: url(./bg6.jpeg);
		background-size: cover;
	}
	fieldset{
		background-image: url(./bg6.jpeg);
		background-size: cover;
		border-radius: 10px;
		border-color: #333333;
		width: 300px;
		margin-right: 40%;
		margin-left: 40%;
		margin-top: 10%;
		margin-bottom: 10%;
	}
	form{
		text-align: center;
		padding: 40px;
	}
	h6{
		color: #333333;
	}
	input{
		text-align: center;
		background-color: lightpink;
		border: solid pink 3px;
		height: 40px;
		width: 200px;
		cursor: pointer;
		caret-color: deeppink;
		color: #333333;
		margin-bottom: 8px;
	}
	input:focus{
		width: 250px;
	}
	button{
		height: 40px;
		width: 90px;
		background-color: lightpink;
		border: solid pink 3px;
		border-radius: 10px;
		font-size: 15px;
		font-family: kristen itc;
		color: #333333;
		cursor: pointer;
	}
	button:hover{
		color: white;
	}
</style>
</head>
<body>
	<div>
		<fieldset>
			<form action="action.php" method="post" name="lunaform">
				<h2>
					<mark>Masukkan Data Mahasiswa</mark>
				</h2>
				<input type="int" name="id_mhs" id="id_mhs" placeholder="ID MAHASISWA" required>
				<br>
				<input type="int" name="id_prodi" id="id_prodi" placeholder="ID PRODI" required>
				<br>
				<input type="text" name="nama_mhs" id="nama_mhs" placeholder="NAMA MAHASISWA" required>
				<br>
				<input type="text" name="alamat_mhs" id="alamat_mhs" placeholder="ALAMAT" required>
				<br>
				<button type="submit" name="submit"> 
					<b> INSERT </b>
				</button>
			</form>
		</fieldset>
	</div>
</body>
</html>