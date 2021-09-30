<?php 
error_reporting(0);
require 'koneksi.php';

if (isset($_POST['edit'])) {
	$no_tlp = $_POST['no_tlp'];
	$alamat = $_POST['alamat'];
	$jumlah = $_POST['jumlah'];
	$kategori = $_POST['kategori'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$path = "image/" . $foto;

	if (empty($foto)) {

		$query = "UPDATE datapesanan SET alamat = '$alamat',jumlah = '$jumlah', kategori = '$kategori' where no_tlp = '$no_tlp' ";

		echo "kucing";
		
	}
	else {
		
		$file = mysqli_query($koneksi, "SELECT foto FROM datapesanan WHERE no_tlp = '$no_tlp'");
		$hasil = mysqli_fetch_array($file);
		$foto_lama = $hasil['foto'];
		unlink("image/" . $foto_lama);
		

		

		if (move_uploaded_file($tmp, $path)) {
			$query = "UPDATE datapesanan SET alamat = '$alamat',jumlah = '$jumlah', kategori = '$kategori', foto = '$foto' where no_tlp = '$no_tlp' ";
			
			
		}

	}
	$result = mysqli_query($koneksi, $query);
	if (!$result) {
		die("Data gagal di ubah; ". mysqli_errno($koneksi).mysqli_error($koneksi));
		# code...
	}
	else {
		
		echo "<script>alert('Data Berhasil Diubah'); window.location.href='index.php' </script>";
	}
}
 ?>