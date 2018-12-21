<?php

include("config.php");

$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$harga_produk = $_POST['harga_produk'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$fotobaru = date('dmYHis').$gambar;
$path = "img/".$fotobaru;

if (move_uploaded_file($tmp, $path)) {
    $query = "UPDATE produk SET nama_produk='$nama_produk',jumlah_produk='$jumlah_produk',harga_produk='$harga_produk',gambar='$fotobaru' WHERE id_produk=$_POST[id_produk]";
    $sql = mysqli_query($mysqli, $query);
    if ($sql) {
        header('Location: list_product.php');
    }else{
        echo "Maaf, Teradi Kesalahan Ketika Penyimpanan";
        header('Location: add_product.php');
    }
}else{
    echo "Maaf Gambar Gagal Disimpan";
}

?>