<?php
$koneksi = mysqli_connect("localhost","root","","restoran");
if (mysqli_connect_error()){
	echo "koneksi Gagal Tolong Nyalakan XAMPP:", mysqli_connect_error();
}
?>