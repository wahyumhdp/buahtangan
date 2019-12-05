<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
}
require 'functions2.php';

$id_makanan = $_GET["id_makanan"];

if(hapus($id_makanan) > 0 ){
	echo "<script>
				alert('Data Berhasil Dihapus');
				document.location.href = 'index.php?p=makanan';
		</script>";
	}else{
		echo "<script>
				alert('Data Gagal Dihapus')
				document.location.href = 'index.php?p=makanan';
		</script>";
	}

	
?>