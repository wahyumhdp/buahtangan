<?php
require 'functions.php';

$produk = query("SELECT * FROM produk");

if(isset($_POST["submit"])){
	$produk = submit($_POST["keyword"]);
}
?>

<html lang="en">
	<head>
		<title>Produk</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>	
	<body>
		<div class="container"><br>
			<div class="card">
		<div class="card-header">
		<center><h4>Data Produk</h4></center>
	</div>
		<div class="card-body">
		<div class="form-group">
		<a href="produkadd.php" class="btn btn-primary">Tambah Produk</a>
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
			<?php foreach ($produk as $row):?>
			<tbody>
			<tr>
				<td><?=	 $i; ?></td>
				<td><?= $row ["nama_produk"];?></td>
				<td><img src="img/<?= $row ["gambar_produk"];?>" style="width: 100px;"></td>
				<td><?= $row ["deskripsi_produk"];?></td>
				<td><?= $row["asal_produk"];?></td>
				<td><?= $row["bahan_produk"];?></td>
				<td>
					<a href="produkedit.php?id_produk=<?= $row ["id_produk"]; ?>"><i class="material-icons">edit</i></a>
					
					<a href="produkdel.php?id_produk=<?= $row ["id_produk"]; ?>" onclick ="return confirm('Apakah Ingin Menghapus?');"><i class="material-icons" style="color: red;">delete</a></i>
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