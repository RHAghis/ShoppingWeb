<?php include("head.php"); ?>
<?php include ("config.php"); ?>
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "toko_online");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_nama_produk"],
				'item_price'		=>	$_POST["hidden_harga_produk"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_nama_produk"],
			'item_price'		=>	$_POST["hidden_harga_produk"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<body>
	<?php include("header.php") ?>
	
    <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td class="Aksi">Aksi</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
						if(!empty($_SESSION["shopping_cart"]))
						{
							$total = 0;
							foreach($_SESSION["shopping_cart"] as $keys => $values)
							{
						?>
						<tr>
							<td><?php echo $values["item_name"]; ?></td>
							<td>$ <?php echo $values["item_price"]; ?></td>
							<td><?php echo $values["item_quantity"];?></td>
							<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
							<td><a href="keranjang.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
						</tr>
						<?php
								$total = $total + ($values["item_quantity"] * $values["item_price"]);
							}
						?>
						<tr>
							<td colspan="3" align="right">Total</td>
							<td align="right">$ <?php echo number_format($total, 2); ?></td>
							<td></td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	
	<?php include("footer.php") ?>
	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
<?php