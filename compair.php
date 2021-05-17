<!DOCTYPE html>
<html lang="en">

<?php 
	include_once('config/config.php');
?>

<head>
	<!-- Head====================================================================== -->
	<?php include_once (DIR_BASE. '/include/head.php')?>
	<!-- Head====================================================================== -->	
</head>



<body>

	<!-- Header====================================================================== -->
	<?php include_once (DIR_BASE. '/include/header.php')?>
	<!-- Header end====================================================================== -->	

	<div id="carouselBlk">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<div class="container">
						<a href="register.php"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers" /></a>
						<div class="carousel-caption">
							<h4>Second Thumbnail label</h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<a href="register.php"><img style="width:100%" src="themes/images/carousel/2.png" alt="" /></a>
						<div class="carousel-caption">
							<h4>Second Thumbnail label</h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<a href="register.php"><img src="themes/images/carousel/3.png" alt="" /></a>
						<div class="carousel-caption">
							<h4>Second Thumbnail label</h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>

					</div>
				</div>
				<div class="item">
					<div class="container">
						<a href="register.php"><img src="themes/images/carousel/4.png" alt="" /></a>
						<div class="carousel-caption">
							<h4>Second Thumbnail label</h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>

					</div>
				</div>
				<div class="item">
					<div class="container">
						<a href="register.php"><img src="themes/images/carousel/5.png" alt="" /></a>
						<div class="carousel-caption">
							<h4>Second Thumbnail label</h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<a href="register.php"><img src="themes/images/carousel/6.png" alt="" /></a>
						<div class="carousel-caption">
							<h4>Second Thumbnail label</h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<div id="sidebar" class="span3">
					<div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart <span class="badge badge-warning pull-right">$155.00</span></a></div>
					<ul id="sideManu" class="nav nav-tabs nav-stacked">
						<li class="subMenu open"><a> ELECTRONICS [230]</a>
							<ul>
								<li><a class="active" href="products.php"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
							</ul>
						</li>
						<li class="subMenu"><a> CLOTHES [840] </a>
							<ul style="display:none">
								<li><a href="products.php"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Men's Clothings (45)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
							</ul>
						</li>
						<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
							<ul style="display:none">
								<li><a href="products.php"><i class="icon-chevron-right"></i>Angoves (35)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Louis Bernard (45)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Garden (3)</a></li>
								<li><a href="products.php"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
							</ul>
						</li>
						<li><a href="products.php">HEALTH & BEAUTY [18]</a></li>
						<li><a href="products.php">SPORTS & LEISURE [58]</a></li>
						<li><a href="products.php">BOOKS & ENTERTAINMENTS [14]</a></li>
					</ul>
					
					<div class="thumbnail">
						<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
						<div class="caption">
							<h5>Payment Methods</h5>
						</div>
					</div>
				</div>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a> <span class="divider">/</span></li>
						<li class="active">Products Compairsition</li>
					</ul>
					<h3> Products Compairsition <small class="pull-right"> 2 products are compaired </small></h3>
					<hr class="soft" />

					<table id="compairTbl" class="table table-bordered">
						<thead>
							<tr>
								<th>Features</th>
								<th>Product1 name here </th>
								<th>Product2 name here</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>&nbsp;</td>
								<td style="text-align:center">
									<p class="justify">
										Nowadays the lingerie industry is one of the most successful business spheres.
										We always stay in touch with the latest fashion tendencies - that is why our
										goods are so popular and we have a great number of faithful customers all over the country.
									</p>
									<img src="themes/images/products/1.jpg" alt="" />
									<form class="form-horizontal qtyFrm">
										<h3> $222.00</h3><br />
										<a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
										<a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
									</form>
								</td>
								<td>
									<p class="justify">
										Nowadays the lingerie industry is one of the most successful business spheres.
										We always stay in touch with the latest fashion tendencies - that is why our
										goods are so popular and we have a great number of faithful customers all over the country.
									</p>
									<img src="themes/images/products/3.jpg" alt="" />

									<form class="form-horizontal qtyFrm">
										<h3> $190.00</h3>
										<br />
										<a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
										<a href="product_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
									</form>
								</td>
							</tr>
							<tr>
								<td>Height</td>
								<td>2"</td>
								<td>2"</td>
							</tr>
							<tr>
								<td>Deepth</td>
								<td>5"</td>
								<td>5"</td>
							</tr>
							<tr>
								<td>Dimension</td>
								<td>--</td>
								<td>--</td>
							</tr>
							<tr>
								<td>Width</td>
								<td>6.5"</td>
								<td>6.5"</td>
							</tr>
							<tr>
								<td>Weight</td>
								<td>0.5kg</td>
								<td>0.5kg</td>
							</tr>
						</tbody>
					</table>
					<a href="products.php" class="btn btn-large pull-right">Back Products Page</a>


				</div>
			</div>
		</div>
	</div>
	<!-- MainBody End ============================= -->
		
	<!-- footer&scr====================================================================== -->
	<?php include_once (DIR_BASE. '/include/footer&scr.php')?>
	<!-- footer&scr end================================================================== -->	
</body>

</html>