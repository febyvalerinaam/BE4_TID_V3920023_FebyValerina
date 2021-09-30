<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Input Data</title>
</head>

<body>
<form action="ProsesInput.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<fieldset>
	<legend><h3>Data</h3></legend>
	<table>
		<tr>
			<td>No Telepon</td>
			<td>:</td>
			<td><input name="no_tlp" type="text" id="no_tlp" size="50" /></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input name="alamat" type="text" id="alamat" size="50" /></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td>:</td>
			<td><input name="jumlah" type="text" id="jumlah" size="50" /></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>:</td>
			<td>
				<select name="kategori" id="kategori">
					<option value="">--Pilih Kategori--</option>
					<option value="merah">Skincare</option>
					<option value="coklat">Makeup</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="foto" id="foto" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="simpan" id="simpan" value="simpan" /></td>
		</tr>
	</table>	
	</fieldset>
	
</form>
</body>
</html>