<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions.php';

$id_produk = $_GET["id_produk"];

if(hapus($id_produk) > 0 ){
	echo "<script>
				alert('Data Berhasil Dihapus');
				document.location.href = 'index.php?p=produk';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Dihapus')
				document.location.href = 'index.php?p=produk';
		</script>";
	}

	
?>