<!DOCTYPE html>
<html lang="en">

<?php
include_once('config/config.php');
$seccion = 'home';

?>

<head>
	<!-- Head====================================================================== -->
	<?php include_once('include/head.php'); ?>
	<!-- Head====================================================================== -->
</head>

<body>
	<!-- Header====================================================================== -->
	<?php include_once('include/header.php'); ?>
	
	<?php include_once('helpers/string.php'); ?>
	<!-- Header end================================================================== -->

	<!--<div id="carouselBlk">
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
	</div> -->
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php include_once('include/sidebar.php'); ?>
				<!-- Sidebar end=============================================== -->
			<!-- 	<div class="span9">
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
													<a href="product_details.php"><img src="themes/images/products/1L.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="product_details.php"><img src="themes/images/products/1s1.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="product_details.php"><img src="themes/images/products/1s2.jpg" alt=""></a>
													<div class="caption">
														<h5>Product name</h5>
														<h4><a class="btn" href="product_details.php">VIEW</a> <span class="pull-right">$222.00</span></h4>
													</div>
												</div>
											</li>
											<li class="span3">
												<div class="thumbnail">
													<i class="tag"></i>
													<a href="product_details.php"><img src="themes/images/products/1s3.jpg" alt=""></a>
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
													<a href="product_details.php"><img src="themes/images/products/12.jpg" alt=""></a>
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
					<ul class="thumbnails">-->
						<!-- ============================= inicio codigo a iterar-->
						<?php

						$arrayProductos = json_decode(file_get_contents('datos/productos.json'), TRUE); // RUTA ABSOLUTA
						//$productos = file_get_contents('datos/productos.json'); // RUTA RELATIVA
						//$productos = file_get_contents(URL_BASE.'datos/productos.json'); (se puede hacer con DIR_BASE O URL_BASE, es lo mismo)
						//var_dump($productos);die(); >>>>> (NOS MUESTRA EL CONTENIDO DEL JSON - FALTA CONFIG PARA QUE MUESTRE LOS ERRORES PHP)

						foreach ($arrayProductos as $producto) {

						?>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.php?producto=<?php echo $producto['id']?>"><img src="themes/images/products/<?php echo $producto['imagenS1']?>" alt="" /></a>
									<div class="caption">
										<h5><?php echo $producto['nombre']?></h5>
										<p><?php echo cortar_palabras($producto['descripcion'],100) ?></p>

										<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo $producto['precio'] ?>$</a></h4>
									</div>
								</div>
							</li>

						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- MainBody End ============================= -->
	<!-- footer&scr====================================================================== -->
	<?php include_once('include/footer&scr.php'); ?>
	<!-- footer&scr end================================================================== -->

</body>

</html>