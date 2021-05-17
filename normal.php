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
					<br />
					<div class="thumbnail">
						<img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera" />
						<div class="caption">
							<h5>Panasonic</h5>
							<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					</div><br />
					<div class="thumbnail">
						<img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
						<div class="caption">
							<h5>Kindle</h5>
							<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					</div><br />
					<div class="thumbnail">
						<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
						<div class="caption">
							<h5>Payment Methods</h5>
						</div>
					</div>
				</div>
				<!-- Sidebar end=============================================== -->
				<div class="span9" id="mainCol">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a> <span class="divider">/</span></li>
						<li class="active">Page Title</li>
					</ul>
					<h3> Title of the page</h3>
					<hr class="soft" />
					<h5>Lorem ipsum dolor sit amet</h5><br />
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt.
					</p>
					<h5>Lorem ipsum dolor sit amet</h5><br />
					<p>
						Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
					</p>
					<h5>Lorem ipsum dolor sit amet</h5><br />
					<p>
						Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
					</p>
					<h5>Lorem ipsum dolor sit amet</h5><br />
					<p>
						Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
					</p>
					<h5>Lorem ipsum dolor sit amet</h5><br />
					<p>
						Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
					</p>
					<h5>Lorem ipsum dolor sit amet</h5><br />
					<p>
						Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in. Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa. Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. Mauris placerat consectetur tincidunt. Nam eu tellus vitae dolor vestibulum commodo. Etiam tristique, urna ac convallis laoreet, enim enim aliquet neque, id cursus risus nulla sed ligula. Nunc quam libero, accumsan vitae consequat at, sollicitudin eget mi. Phasellus in molestie diam. Aliquam enim purus, tempor id sodales non, volutpat eu diam. Donec eu nisl lacinia leo semper lobortis sed sit amet elit.
					</p>
					<h5>Lorem ipsum dolor sit amet</h5><br />
					<p>
						Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
					</p>
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