<!DOCTYPE html>
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
	<!-- Header end====================================================================== -->

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php include_once(DIR_BASE . '/include/sidebar.php') ?>
				<!-- Sidebar end=============================================== -->

				<?php
				$arrayProductos = json_decode(file_get_contents(DIR_BASE . '/datos/productos.json'), TRUE); // TRAIGO EL ARRAY DE PRODUCTO
				$producto = $arrayProductos[$_GET['producto']];	//GUARDO EL ARRAY QUE ME TRAIGO DE producto.php
				//var_dump($producto);
				?>

				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a> <span class="divider">/</span></li>
						<li><a href="products.php">Products</a> <span class="divider">/</span></li>
						<li class="active">product Details</li>
					</ul>
					<div class="row">
						<div id="gallery" class="span3">
							<a href="themes/images/products/<?php echo $producto['imagenL'] ?>" title="Fujifilm FinePix S2950 Digital Camera">
								<img src="themes/images/products/<?php echo $producto['imagenL'] ?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera" />
							</a>
							<div id="differentview" class="moreOptopm carousel slide">
								<div class="carousel-inner">
									<div class="item active">
										<a href="themes/images/products/<?php echo $producto['imagenS1'] ?>"> <img style="width:29%" src="themes/images/products/<?php echo $producto['imagenS1'] ?>" alt="" /></a>
										<a href="themes/images/products/<?php echo $producto['imagenS2'] ?>"> <img style="width:29%" src="themes/images/products/<?php echo $producto['imagenS2'] ?>" alt="" /></a>
										<a href="themes/images/products/<?php echo $producto['imagenS3'] ?>"> <img style="width:29%" src="themes/images/products/<?php echo $producto['imagenS3'] ?>" alt="" /></a>
									</div>
								</div>
							</div>

							<div class="btn-toolbar">
								<div class="btn-group">
									<span class="btn"><i class="icon-envelope"></i></span>
									<span class="btn"><i class="icon-print"></i></span>
									<span class="btn"><i class="icon-zoom-in"></i></span>
									<span class="btn"><i class="icon-star"></i></span>
									<span class="btn"><i class=" icon-thumbs-up"></i></span>
									<span class="btn"><i class="icon-thumbs-down"></i></span>
								</div>
							</div>
						</div>
						<div class="span6">
							<h3><?php echo $producto['nombre'] ?></h3>
							<hr class="soft" />
							<form class="form-horizontal qtyFrm">
								<div class="control-group">
									<label class="control-label"><span><?php echo $producto['precio'] ?>$</span></label>
									<div class="controls">
										<input type="number" class="span1" placeholder="Qty." />
										<button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
									</div>
								</div>
							</form>

							<hr class="soft" />
							<h4>100 items in stock</h4>
							<hr class="soft clr" />
							<p><?php echo $producto['descripcion'] ?></p>
							<br class="clr" />
							<a href="#" name="detail"></a>
							<hr class="soft" />
						</div>

					</div>
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