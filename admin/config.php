<?php

$mysqli = mysqli_connect('localhost', 'root', '', 'toko_online');

if($mysqli){
	//echo "koneksi database berhasil.<br/>";
} else {
	echo "koneksi gagal.<br/>";
}
?>