<?php
require 'functions2.php';

$makanan = query("SELECT * FROM makanan");

if (isset($_POST["submit"])) {
	$makanan = submit($_POST["keyword"]);
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
	<body>
		<div class="container"><br>
			<div class="card">
		<div class="card-header">
		<center><h4>Data Makanan</h4></center>
	</div>
		<div class="card-body">
		<div class="form-group">
		<a href="makananadd.php" class="btn btn-primary">Tambah Makanan</a>
		<div class="table-responsive"><br>
		<table class="table">
			<thead class="thead-dark table-bordered">
			<tr>
				<th scope="col">No.</th>
				<th scope="col">Nama</th>
				<th scope="col">Gambar</th>
				<th scope="col">Deskripsi</th>
				<th scope="col">Asal</th>
				<th scope="col">Bahan</th>
				<th scope="col">Aksi</th>
			</tr>
			</thead>
			<?php  $i = 1;?>
			<?php foreach ($makanan as $row):?>
			<tbody>
			<tr>
				<td><?=	 $i; ?></td>
				<td><?= $row ["nama_makanan"];?></td>
				<td><img src="img/<?= $row ["gambar_makanan"]; ?>" style="width: 100px;"></td>
				<td><?= $row ["deskripsi_makanan"];?></td>
				<td><?= $row["asal_makanan"];?></td>
				<td><?= $row["bahan_makanan"];?></td>
				<td>
					<a href="makananedit.php?id_makanan=<?= $row ["id_makanan"]; ?>"><i class="small material-icons">edit</i></a>
					
					<a href="makanandel.php?id_makanan=<?= $row ["id_makanan"]; ?>" onclick ="return confirm('Apakah Ingin Menghapus?');"><i class="small material-icons" style="color: red;">delete</i></a>
				</td>
			</tr>
			</tbody>
			<?php $i++;?>
		<?php endforeach;?>
		</table>
		</div>
	</div>
	</div>
	</div>
	</body>
</html>