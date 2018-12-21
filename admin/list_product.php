<?php include("head.php"); ?>
<?php include ("config.php"); ?>

<body>
	<?php include("header.php") ?>
	
		<div class="container">
			<div class="col-sm-9">
				<h2>List Product</h2><br>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID PRODUK</th>
							<th>NAMA PRODUK</th>
							<th>JUMLAH PRODUK</th>
							<th>HARGA PRODUK</th>
							<th>GAMBAR BARANG</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$sql = "SELECT * FROM produk";
						$query = mysqli_query($mysqli, $sql);
						$nomor = 1;
						while ($item = mysqli_fetch_array($query)){
						?>
						<tr>

							<td><center><?php echo $nomor; ?></td></center>
							<td><center><?php echo $item['nama_produk']; ?></td></center>
							<td><center><?php echo $item['jumlah_produk']; ?></td></center>
							<td><center><?php echo $item['harga_produk']; ?></td></center>
							<td><center><img width="100px" src="img/<?php echo $item['gambar']; ?>"></td></center>
							<td>
								<a href="edit_product.php?id_produk=<?php echo $item['id_produk']; ?>"><i class="fa fa-edit"></i> Edit</a> | 
								<a href="hapus.php?id_produk=<?php echo $item['id_produk']; ?>"><i class="fa fa-eraser"></i>Hapus</a>
							</td>
						</tr>
						<?php?>
						<?php $nomor++; ?>
						<?php } ?>
					</tbody>
				</table>
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