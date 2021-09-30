<?php 
error_reporting(0);
include 'koneksi.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Data Pesanan</title>
</head>
<body>

	<h1 style="text-align: center;">Data Pesanan</h1>
	<center><a href="InputBrem.php">Tambah Data</a></center>

	<table border="1" style="margin: auto;">
		<thead>
			<tr>
				<th>No</th>
				<th>no_tlp</th>
				<th>alamat</th>
				<th>jumlah</th>
				<th>kategori</th>
				<th>Foto</th>
				<th>Edit</th>
				<th>Hapus</th>

			</tr>
		</thead>
		<tbody>
			<?php 
			$no=0;
			$result = mysqli_query($koneksi, "SELECT * FROM datapesanan ORDER BY no_tlp ASC");
			while($row = mysqli_fetch_array($result)){
			$no++
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row['no_tlp']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['kategori']; ?></td>
				<td><?php echo $row['jumlah']; ?></td>
				<td>
					<center>
						<img src="image/<?php echo $row['foto'];?>" border="0" width="90px" height="90px"/>
					</center>
				</td>
				<td>
					<a href="Edit.php?id=<?php echo $row['no_tlp']; ?>">Edit</a>
				</td>
				<td>
					<a href="Hapus.php?id=<?php echo $row['no_tlp'];?>">Hapus</a>
				</td>
			</tr>
		<?php }?> 

		</tbody>
	</table>


</body>
</html>