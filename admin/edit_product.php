<?php include("head.php"); ?>
<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'toko_online');
$sql = "SELECT * FROM produk WHERE id_produk = $_GET[id_produk]";
$query = mysqli_query($mysqli, $sql);
$item = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
	die("data tidak ditemukan");
}
?>

<body>
	<?php include("header.php") ?>
	
		<div class="container">
			<div class="col-sm-9">
				<h2>Edit Product</h2><br>
			</div>
			<div class="form-horizontal">
				<form action="proses-edit.php" method="post" enctype="multipart/form-data">
					<div class="col-md-12">
						<div class="form-group">
							<input type="hidden" name="id_produk" value="<?php echo $item['id_produk']; ?>" />
							<div class="col-sm-2">
								<label for="nama_produk">Nama Produk </label>
							</div>
							<div class="col-sm-5">
								<input class="form-control" type="text" name="nama_produk" value="<?php echo $item['nama_produk'] ?>" />
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
							<div class="col-sm-2">
								<label for="nama_produk">Jumlah Produk </label>
							</div>
							<div class="col-sm-5">
								<input class="form-control" type="number" name="jumlah_produk" value="<?php echo $item['jumlah_produk'] ?>" />
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
							<div class="col-sm-2">
								<label for="nama_produk">Harga Produk </label>
							</div>
							<div class="col-sm-5">
								<input class="form-control" type="text" name="harga_produk" value="<?php echo $item['harga_produk'] ?>" />
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
							<div class="col-sm-2">
								<label for="nama_produk">Gambar </label>
							</div>
							<div class="col-sm-5">
								<img src="img/<?php echo $item['gambar'] ?>" class="img-responsive" alt="Image">
							</div>
							<div class="col-sm-8">
								<input type="file" name="gambar"/>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<input class="btn-success" type="submit" value="Update" name="update">
					</div>
				</form>
			</div>
		</div>
	
	<?php include("footer.php") ?>
	
    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.scrollUp.min.js"></script>
	<script src="../js/price-range.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>
<?php