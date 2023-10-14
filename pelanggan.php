<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
</head>
<body>
 <center>
	<h2>Daftar Nama Pelanggan</h2>
	<br/>
	<a href="menu.html">+ Silahkan Pesan Makanan</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Menu</th>
			<th>Telp</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pesanan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['menu']; ?></td>
				<td><?php echo $d['telp']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
<a href="edit.php?id=<?php echo $d['id']; ?>">Edit-Data</a>
<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus-Data</a>
				</td>
			</tr>
			<?php 
		}
		?> 
	</table>
</center>
<center><a href="index.html">Home</a></center>
</body>
</html>