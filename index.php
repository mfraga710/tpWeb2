﻿<!DOCTYPE html>
<html lang="en">

<?php
include_once('config/config.php');
?>

<head>
	<!-- Head====================================================================== -->
	<?php include_once(DIR_BASE . '/include/head.php') ?>
	<!-- Head====================================================================== -->
</head>

<body>
	<!-- Header====================================================================== -->
	<?php include_once(DIR_BASE . '/include/header.php') ?>
	<!-- Header end================================================================== -->

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
						<li class="subMenu open"><a> CATEGORIA [230]</a>
							<ul>
							<?php 
								$arrCat = json_decode(file_get_contents(DIR_BASE.'datos/categoria.json'));
								foreach($arrCat as $cat)
							?>
								<li><a class="active" href="products.php"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
								
							</ul>
						</li>
						<li class="subMenu"><a> MARCA [840] </a>
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
						
					<div class="thumbnail">
						<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
						<div class="caption">
							<h5>Payment Methods</h5>
						</div>
					</div>
				</div>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<div class="well well-small">
						<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
						<div class="row-fluid">
							<div id="featured" class="carousel slide">
								<div class="carousel-inner">
									<div class="item active">
										<ul class="thumbnails">
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="product_details.php"><img src="themes/images/products/b1.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="product_details.php"><img src="themes/images/products/b2.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="product_details.php"><img src="themes/images/products/b3.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="product_details.php"><img src="themes/images/products/b4.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails">
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="product_details.php"><img src="themes/images/products/5.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="product_details.php"><img src="themes/images/products/6.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/7.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/8.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails">
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/9.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/10.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/11.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/1.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails">
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/2.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/3.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/4.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<a href="product_details.php"><img src="themes/images/products/5.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
								<a class="right carousel-control" href="#featured" data-slide="next">›</a>
							</div>
						</div>
					</div>
					<h4>Latest Products </h4>
					<ul class="thumbnails">
						<li class="span3">
							<div class="thumbnail">
								<a href="product_details.php"><img src="themes/images/products/6.jpg" alt="" /></a>
								<div class="caption">
									<h5>Product name</h5>
									<p>
										Lorem Ipsum is simply dummy text.
									</p>

									<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a href="product_details.php"><img src="themes/images/products/7.jpg" alt="" /></a>
								<div class="caption">
									<h5>Product name</h5>
									<p>
										Lorem Ipsum is simply dummy text.
									</p>
									<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a href="product_details.php"><img src="themes/images/products/8.jpg" alt="" /></a>
								<div class="caption">
									<h5>Product name</h5>
									<p>
										Lorem Ipsum is simply dummy text.
									</p>
									<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a href="product_details.php"><img src="themes/images/products/9.jpg" alt="" /></a>
								<div class="caption">
									<h5>Product name</h5>
									<p>
										Lorem Ipsum is simply dummy text.
									</p>
									<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a href="product_details.php"><img src="themes/images/products/10.jpg" alt="" /></a>
								<div class="caption">
									<h5>Product name</h5>
									<p>
										Lorem Ipsum is simply dummy text.
									</p>
									<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a href="product_details.php"><img src="themes/images/products/11.jpg" alt="" /></a>
								<div class="caption">
									<h5>Product name</h5>
									<p>
										Lorem Ipsum is simply dummy text.
									</p>
									<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
	<!-- MainBody End ============================= -->
	<!-- footer&scr====================================================================== -->
	<?php include_once(DIR_BASE . '/include/footer&scr.php') ?>
	<!-- footer&scr end================================================================== -->

</body>

</html>