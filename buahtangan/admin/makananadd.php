<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions2.php';
if (isset($_POST["submit"])) {
	
	if(tambah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href = 'index.php?p=makanan';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Ditambahkan')
				document.location.href = 'index.php?=makanan';
		</script>";
	}

}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
			<div class="container"><br>
			<div class="card">
			<div class="card-header">
			<h3 class="card-tittle">Tambah Data Makanan</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
				<label  for="nama_makanan">Nama Makanan :</label>
				<input class="form-control" type="text" name="nama_makanan" id="nama_makanan">
				</div>
				<div class="form-group">
				<label for="gambar_makanan">Gambar Makanan :</label>
				<input type="file" name="gambar_makanan" id="gambar_makanan">
			</div>
			<div class="form-group">
				<label for="deskripsi_makanan">Deskripsi Makanan :</label>
				<textarea class="form-control" type="text" name="deskripsi_makanan" id="deskripsi_makanan"></textarea>
			</div>
			<div class="form-group">
				<label for="asal_makanan">Asal Makanan :</label>
				<input class="form-control" type="text" name="asal_makanan" id="asal_makanan">
			</div>
			<div class="form-group">
				<label for="bahan_makanan">Bahan Makanan :</label>
				<input class="form-control" type="text" name="bahan_makanan" id="bahan_makanan">
			</div>
			<button name="submit" type="submit" class="btn btn-primary">Tambah Data Makanan</button>
		</div>
	</form>
	</div>
</div>
</div>
	</div>
	</div>
	</body>
</html>