<?php

$conn = mysqli_connect("localhost","root","","db_buahtangan");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	} 
	return $rows;
}

function tambah($data){
	global $conn;
	$nama_produk = htmlspecialchars( $data["nama_produk"]);
	$deskripsi_produk = htmlspecialchars( $data["deskripsi_produk"]);
	$asal_produk = htmlspecialchars( $data["asal_produk"]);
	$bahan_produk = htmlspecialchars( $data["bahan_produk"]);

	$gambar_produk = upload();
	if(!$gambar_produk){
		return false;
	}

		$query = "INSERT INTO produk VALUES ('','$nama_produk','$gambar_produk','$deskripsi_produk','$asal_produk','$bahan_produk' )";

	mysqli_query($conn,$query) ;

	return mysqli_affected_rows($conn);

}
function upload(){

	$namaFile = $_FILES['gambar_produk']['name'];
	$ukuranFile = $_FILES['gambar_produk']['size'];
	$error = $_FILES['gambar_produk']['error'];
	$tmpName = $_FILES['gambar_produk']['tmp_name'];

	if($error === 4){
		echo "<script> alert('Upload Gambar Dahulu') </script>?";
		return false;
	}


	$ekstensiGambarValid = ['jpg' ,'jpeg','png'];
	$ekstensiGambar = explode('.',$namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar,$ekstensiGambarValid)) {
		echo "<script> alert('Yang Diupload Bukan Gambar') </script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru.=$ekstensiGambar;
	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
	return $namaFileBaru;
}	

function hapus($id_produk){
	global $conn;
	mysqli_query($conn,"DELETE  FROM produk WHERE id_produk='$id_produk'");
	return mysqli_affected_rows($conn);
}
	function ubah($data){
		global $conn;

		$id_produk = $data["id_produk"];
		$nama_produk = htmlspecialchars($data["nama_produk"]);
		$deskripsi_produk = htmlspecialchars($data["deskripsi_produk"]);
		$asal_produk = htmlspecialchars($data["asal_produk"]);
		$bahan_produk = htmlspecialchars($data["bahan_produk"]);

		if(isset($data["ubah_gambar"])){
			$ekstensiDiperbolehkan = array('jpg', 'png', 'jpeg');
			$nama = $_FILES['gambar_produk']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$file_tmp = $_FILES['gambar_produk']['tmp_name'];
			$fileBaru = $nama;

			if(move_uploaded_file($file_tmp, 'img/'.$fileBaru)){
				$query = "SELECT * FROM produk WHERE id_produk";
				$result = mysqli_query($conn, $query);
				$data = mysqli_fetch_assoc($result);

				if (is_file('img/'. $data["gambar_produk"])) {
						unlink('img/'. $data["gambar_produk"]);
				}

				$query = "UPDATE produk SET nama_produk = '$nama_produk', gambar_produk = '$fileBaru', deskripsi_produk = '$deskripsi_produk', asal_produk = '$asal_produk', bahan_produk = '$bahan_produk' WHERE id_produk = $id_produk ";
			}
		}else{
			$query = "UPDATE produk SET nama_produk = '$nama_produk', deskripsi_produk = '$deskripsi_produk', asal_produk = '$asal_produk', bahan_produk = '$bahan_produk' WHERE id_produk = $id_produk ";
		}


		mysqli_query($conn, $query);

	    return mysqli_affected_rows($conn);
	}

	function submit($keyword){
		$query = "SELECT * FROM produk WHERE
		nama_produk LIKE '%$keyword%' OR 
		deskripsi_produk LIKE '%$keyword%' OR
		asal_produk LIKE '%$keyword%' OR 
		bahan_produk LIKE '%$keyword%'";

		return query($query);
	}
?>