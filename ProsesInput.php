<?php
//error_reporting(0);
include 'koneksi.php';

if (isset($_POST['simpan'])) {
	
	$no_tlp = $_POST['no_tlp'];
	$alamat = $_POST['alamat'];
	$jumlah = $_POST['jumlah'];
	$kategori = $_POST['kategori']; 
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$path = "image/".$foto;

	echo $no_tlp;
	echo $alamat;
	echo $kategori;
	echo $jumlah;
	echo $foto;

	if (move_uploaded_file($tmp, $path)) {
		$query = "INSERT INTO datapesanan (no_tlp, alamat, kategori, jumlah, foto) VALUES ('$no_tlp', '$alamat', '$kategori', '$jumlah', '$foto')";

		$result = mysqli_query($koneksi, $query);

		if(!$result){
			die("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
		}
		else
		{
			echo "<script>alert('Data Berhasil Ditambah');window.location.href='index.php'</script> ";
		}	
	}
}

?>