<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$menu = $_POST['menu'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pesanan values('','$nama','$menu','$telp','$alamat')");
// mengalihkan halaman kembali ke pelanggan.php
header("location:pelanggan.php");
?>