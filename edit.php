<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pelanggan</title>
</head>
<body>
 <center>
	<h2>Silahkan Update Pelanggan</h2>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pesanan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
		<table>
			<tr>			
			<td>Nama</td>
			<td>
			<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
			<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
			</td>
			</tr>
			<tr>
			<td>Menu Masakan</td>
			<td><select name="menu"><option value="<?php echo $d['menu']; ?>"><?php echo $d['menu'];?>
			</tr>
				<tr>
					<td>Telp</td>
<td><input type="text" name="telp" value="<?php echo $d['telp']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
		<?php 
	}
	?>
<a href="pelanggan.php">Home</a>
</center>
</body>
</html>