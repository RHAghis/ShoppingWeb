<?php include("head.php"); ?>

<body>
	<?php include("header.php") ?>
	
		<div class="container">
			<div class="col-sm-9">
				<h2>Add Product</h2><br>
			</div>
			<div class="form-horizontal">
				<form action="proses-input.php" method="post" enctype="multipart/form-data">
					<div class="col-md-12">
						<div class="form-group">
							<div class="col-sm-2">
								<label for="nama_produk">Nama Produk </label>
							</div>
							<div class="col-sm-5">
								<input class="form-control" type="text" name="nama_produk" placeholder="Nama Produk"/>
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
							<div class="col-sm-2">
								<label for="jumlah_produk">Jumlah Produk </label>
							</div>
							<div class="col-sm-5">
								<input class="form-control" type="number" name="jumlah_produk" placeholder="Jumlah Produk"/>
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
							<div class="col-sm-2">
								<label for="harga_produk">Harga Produk </label>
							</div>
							<div class="col-sm-5">
								<input class="form-control" type="text" name="harga_produk" placeholder="Harga Produk"/>
							</div>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
							<div class="col-sm-2">
								<label for="gambar">Gambar </label>
							</div>
							<div class="col-sm-5">
								<input class="form-control" type="file" name="gambar"/>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<input class="btn-success" type="submit" value="Tambah" name="tambah">
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