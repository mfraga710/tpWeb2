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
						<li class="active">Login</li>
					</ul>
					<h3> Login</h3>
					<hr class="soft" />

					<div class="row">
						<div class="span4">
							<div class="well">
								<h5>CREATE YOUR ACCOUNT</h5><br />
								Enter your e-mail address to create an account.<br /><br /><br />
								<form action="register.php">
									<div class="control-group">
										<label class="control-label" for="inputEmail0">E-mail address</label>
										<div class="controls">
											<input class="span3" type="text" id="inputEmail0" placeholder="Email">
										</div>
									</div>
									<div class="controls">
										<button type="submit" class="btn block">Create Your Account</button>
									</div>
								</form>
							</div>
						</div>
						<div class="span1"> &nbsp;</div>
						<div class="span4">
							<div class="well">
								<h5>ALREADY REGISTERED ?</h5>
								<form>
									<div class="control-group">
										<label class="control-label" for="inputEmail1">Email</label>
										<div class="controls">
											<input class="span3" type="text" id="inputEmail1" placeholder="Email">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPassword1">Password</label>
										<div class="controls">
											<input type="password" class="span3" id="inputPassword1" placeholder="Password">
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<button type="submit" class="btn">Sign in</button> <a href="forgetpass.php">Forget password?</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

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