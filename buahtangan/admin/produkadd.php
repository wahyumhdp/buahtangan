<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';
if (isset($_POST["submit"])) {
	
	if(tambah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href = 'index.php?p=produk';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Ditambahkan')
				document.location.href = 'index.php';
		</script>";
	}

}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
	</head>
	<body>
			<div class="container"><br>
			<div class="card">
			<div class="card-header">
			<h3 class="card-tittle">Tambah Data Produk</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
				<label  for="nama_produk">Nama Produk :</label>
				<input class="form-control" type="text" name="nama_produk" id="nama_produk">
				</div>
				<div class="form-group">
				<label for="gambar_produk">Gambar Produk :</label>
				<input type="file" name="gambar_produk" id="gambar_produk">
			</div>
			<div class="form-group">
				<label for="deskripsi_produk">Deskripsi Produk :</label>
				<textarea class="form-control" type="text" name="deskripsi_produk" id="deskripsi_produk"></textarea> 
			</div>
			<div class="form-group">
				<label for="asal_produk">Asal Produk :</label>
				<input class="form-control" type="text" name="asal_produk" id="asal_produk">
			</div>
			<div class="form-group">
				<label for="bahan_produk">Bahan Produk :</label>
				<input class="form-control" type="text" name="bahan_produk" id="bahan_produk">
			</div>
			<button name="submit" type="submit" class="btn btn-primary">Tambah Data Produk</button>
		</div>
	</form>
	</div>
</div>
</div>
	</div>
	</div>
	</body>
</html>