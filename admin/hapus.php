<?php 
include 'config.php';
mysqli_query($mysqli, "DELETE FROM produk WHERE id_produk = '$_GET[id_produk]'");
echo "<script type='text/javascript'>alert('Data Terhapus!');</script>";
echo "<script type='text/javascript'>location='list_product.php';</script>";
?>