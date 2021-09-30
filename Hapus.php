<?php 
error_reporting(0);
include 'koneksi.php';

if (isset($_GET['id'])) 
{
	$no_tlp = $_GET['id'];

	$file = mysqli_query($koneksi, "SELECT foto FROM datapesanan where no_tlp = '$no_tlp'");
	$hasil = mysqli_fetch_array($file);
	$foto_lama=$hasil['foto'];
	unlink("image/".$foto_lama);

	$query = "DELETE from datapesanan where no_tlp = '$no_tlp'";
	$result = mysqli_query($koneksi, $query);

	if (!$result) {
		die("Data gagal di tambahkan; ". mysqli_errno($koneksi). mysqli_error($koneksi));

	}else {
		echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
	}
	
}
 ?>