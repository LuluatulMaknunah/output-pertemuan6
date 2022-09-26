<?php
$koneksi=mysqli_connect("localhost","root","","luluatulmaknunah");
$sql="SELECT id_mhs, nama_mhs, nama_prodi, alamat_mhs FROM tbl_mahasiswa m, tbl_prodi p WHERE m.id_prodi=p.id_prodi";
$hasil=mysqli_query($koneksi,$sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DATA MAHASISWA TEKNIK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>DATA MAHASISWA TEKNIK</h2>
  <p>Tabel Data Mahasiswa Teknik</p>
  <form method="post" action="pertemuan6.php">
    <button type="submit" class="btn btn-primary">INSERT</button>             
  </form>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID_MHS</th>
        <th>NAMA MAHASISWA</th>
        <th>PRODI</th>
        <th>ALAMAT</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($baris=mysqli_fetch_assoc($hasil)){
      ?>
        <tr>
          <td><?php echo $baris['id_mhs'];?></td>
          <td><?php echo $baris['nama_mhs'];?></td>
          <td><?php echo $baris['nama_prodi'];?></td>
          <td><?php echo $baris['alamat_mhs'];?></td>
          <td>
            <button type="button" class="btn btn-info">Sunting</button>
            <button type="button" class="btn btn-danger">Hapus</button>
          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</body>
</html>