<?php include("head.php"); ?>
<?php include ("config.php"); ?>

<body>
	<?php include("header.php") ?>
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Makeup Shop</span>by Tika Yulian</h1>
									<h2>Tempat Belanja Murah dan Terpercaya</h2>
									<p>Dapatkan produk berkualitas dengan harga yang terjangkau karena kami langsung mengambil dari pabriknya. Tidak perlu diragukan lagi tentang keamanan, karena kami Online Shop terpercaya</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
								<h1><span>Makeup Shop</span>by Tika Yulian</h1>
									<h2>Banyak Diskon dan Produk Terbaru</h2>
									<p>Disini kalian akan mendapatkan banyak diskon besar besaran lohhh. Buruaaan belanja di Makeup Shop by Tika Yulian!!</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
								<h1><span>Makeup Shop</span>by Tika Yulian</h1>
									<h2>Lengkap dan Berkualitas</h2>
									<p>Produk makeup yang kalian cari, semua tersedia disini. Jadi, tunggu apalagi sis???</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#peralatanmakup">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Peralatan Makeup
										</a>
									</h4>
								</div>
								<div id="peralatanmakup" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Beauty Blender</a></li>
											<li><a href="#">Blush On Brush</a></li>
											<li><a href="#">Foundation Brush</a></li>
											<li><a href="#">EyeLiner Brush</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#brand">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											MAKEUP BRAND
										</a>
									</h4>
								</div>
								<div id="brand" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">INEZ</a></li>
											<li><a href="#">LT PRO</a></li>
											<li><a href="#">MAKEOVER</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!--/category-products-->
						
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Shop Items</h2>
						<?php

						$sql = "SELECT * FROM produk order by id_produk";
						$query = mysqli_query($mysqli, $sql);
						//$nomor = 1;
						while ($item = mysqli_fetch_array($query)){
						?>
						<form action="keranjang.php?action=add&id=<?php echo $item["id_produk"]; ?>" method="POST">
							
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
												<img width="200" height="300" src="admin/img/<?php echo $item['gambar']; ?>" alt="" />
												<h2>$ <?php echo $item['harga_produk']; ?></h2>
												<p><?php echo $item['nama_produk']; ?></p>
												<input type="number" name="quantity" value="1" class="form-control" />
												<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
												<input type="hidden" name="hidden_nama_produk" value="<?php echo $item['nama_produk']; ?>" />
												<input type="hidden" name="hidden_harga_produk" value="<?php echo $item['harga_produk']; ?>" />
											</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
										</ul>
									</div>
								</div>
							</div>
						
						
						</form>
						<?php?>
						<?php } ?>
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<?php include("footer.php") ?>
	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
<?php