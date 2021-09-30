<?php 
error_reporting(0);
require 'koneksi.php';
if (isset($_GET["id"])) {
	$id = ($_GET["id"]);

	$result = mysqli_query($koneksi, "SELECT * FROM datapesanan WHERE no_tlp=$id");
	while ($row = mysqli_fetch_array($result)) {
		$no_tlp= $row["no_tlp"];
		$alamat= $row["alamat"];
		$kategori= $row["kategori"];
		$jumlah = $row["jumlah"];
		$foto= $row["foto"];
		
	}
}
else {
	header("location:index.php");
}
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Data Brem</title>
 </head>
 <body>
 	<form method="post" action="ProsesEditBrem.php" enctype="multipart/form-data" name="form1" id="form1">

 		<fieldset>
 			<legend><h3>Data Pegawai</h3></legend>
 			
 			<table>
 				<tr>
					<td>No Telepon</td>
					<td>:</td>
					<td><input type="text" name="no_tlp" id="no_tlp" size="50" readonly value="<?php echo $no_tlp;?>" />
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" id="alamat" size="50" value="<?php echo $alamat; ?>" /></td>
				</tr>

				<tr>
					<td>Jumlah</td>
					<td>:</td>
					<td><input type="text" name="jumlah" id="jumlah" size="50" value="<?php echo $jumlah; ?>"/></td>
				</tr>
				
				<tr>
					<td>Kategori</td>
					<td>:</td>
					<td>
						<select name="kategori" id="kategori">
							<option value="">--pilih kategori--</option>
							<option value="merah" <?php if($kategori == 'merah') echo'selected ="selected"';?>>merah</option>
							<option value="coklat" <?php if($kategori == 'coklat') echo'selected ="selected"';?> > coklat</option>
							<option value="original" <?php if($kategori == 'original') echo'selected ="selected"';?>>original</option>
						</select>

					</td>
				</tr>
				
				<tr>
					<td>Foto</td>
					<td>:</td>
					<td>
					<input type="file" name="foto" id="foto" />
					<?php echo $foto; ?>
					</td>
					
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="edit" id="edit" value="Edit" /></td>
				</tr>
 			</table>
 		</fieldset>
 	</form>

 
 </body>
 </html>