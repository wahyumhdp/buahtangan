<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions2.php';
	
	$id_makanan = $_GET["id_makanan"];

	$makanan = query("SELECT * FROM makanan WHERE id_makanan = $id_makanan")[0];
if (isset($_POST["submit"])) {
	
	if(ubah($_POST) > 0){
		echo "<script>
				alert('Data Berhasil Diubah');
				document.location.href = 'index.php?p=makanan';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Diubah')
				document.location.href = 'index.php?p=makanan';
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
		<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-tittle">Edit Data Makanan</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
				<input type="hidden" name="id_makanan" value="<?= $makanan["id_makanan"]; ?>">
			</div>
				<div class="form-group">
				<label for="nama_makanan">Nama Makanan :</label>
				<input class="form-control" type="text" name="nama_makanan" id="nama_makanan" value="<?= $makanan["nama_makanan"]; ?>">
			</div>
				<div class="form-group">
				<label for="gambar_makanan">Gambar Makanan :</label>
				<input type="file" name="gambar_makanan" id="gambar_makanan">
				<input type="checkbox" name="ubah_gambar"/>
			</div>
				<div class="form-group">
				<label for="deskripsi_makanan">Deskripsi Makanan :</label>
				<textarea class="form-control" type="text" name="deskripsi_makanan" id="deskripsi_makanan" value="<?= $makanan["deskripsi_makanan"]; ?>"></textarea>
				</div>
				<div class="form-group">
				<label for="asal_makanan">Asal Makanan :</label>
				<input class="form-control" type="text" name="asal_makanan" id="asal_makanan" value="<?= $makanan["asal_makanan"]; ?>">
			</div>
				<div class="form-group">
				<label for="bahan_makanan">Bahan Makanan :</label>
				<input class="form-control" type="text" name="bahan_makanan" id="bahan_makanan" value="<?= $makanan["bahan_makanan"]; ?>">
			</div>
			<button name="submit" type="submit" class="btn btn-primary">Edit Data Produk</button>
	</div>
	</form>
	</div>
	</body>
</html>