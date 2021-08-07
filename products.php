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
	<?php
	include_once(DIR_BASE . '/include/header.php');
	include_once(DIR_BASE . '/helpers/string.php');
	include_once(DIR_BASE . '/helpers/image.php');
	?>
	<!-- Header end====================================================================== -->

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php include_once(DIR_BASE . '/include/sidebar.php');

				?>
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a> <span class="divider">/</span></li>
						<li class="active">Products Name</li>
					</ul>
					<h3> Products Name</h3>
					<hr class="soft" />

					<hr class="soft" />
					<form class="form-horizontal span6">
						<div class="control-group">
							<label class="control-label alignL">Sort By </label>
							<select>
								<option>Priduct name A - Z</option>
								<option>Priduct name Z - A</option>
								<option>Priduct Stoke</option>
								<option>Price Lowest first</option>
							</select>
						</div>
					</form>

					<div id="myTab" class="pull-right">
						<a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
						<a href="#blockView" data-toggle="tab"><span class="btn btn-large"><i class="icon-th-large"></i></span></a>
					</div>
					<br class="clr" />
					<div class="tab-content">
						<div class="tab-pane active" id="listView">

							<!-- inicio codigo a iterar -->
							<?php

							$arrayProductos = json_decode(file_get_contents(DIR_BASE . '/datos/productos.json'), TRUE); // RUTA ABSOLUTA


							foreach ($arrayProductos as $producto) {
								$print = true;
								if (!empty($_GET['categoria']) and $print) {
									if ($producto['categoria'] != $_GET['categoria']) $print = FALSE;
								}
								if (!empty($_GET['marca']) and $print) {
									if ($producto['marca'] != $_GET['marca']) $print = FALSE;
								}
								if ($print) {
							?>
									<div class="row">
										<div class="span2">
											<?php $img = obtener_imagenes('themes/images/products/' . $producto['id'] . '/');

											?>
											<img src="<?php echo str_replace('small', 'big', $img[0]) ?>" alt="" />

										</div>
										<div class="span4">
											<h3>New | Available</h3>
											<hr class="soft" />
											<h5><?php echo $producto['nombre'] ?></h5>
											<p><?php echo cortar_palabras($producto['descripcion'], 100) ?></p>
											<a class="btn btn-small pull-right" href="product_details.php?producto=<?php echo $producto['id'] ?>">View Details</a>
											<br class="clr" />
										</div>
										<div class="span3 alignR">
											<form class="form-horizontal qtyFrm">
												<h3><?php echo $producto['precio'] ?>$</h3>
												<label class="checkbox">
													<input type="checkbox"> Adds product to compair
												</label><br />

												<a href="product_details.php?producto=<?php echo $producto['id'] ?>" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
												<a href="product_details.php?producto=<?php echo $producto['id'] ?>" class="btn btn-large"><i class="icon-zoom-in"></i></a>

											</form>
										</div>
									</div>
									<hr class="soft" />

							<?php }
							} ?>
							<!-- fin de codigo a iterar -->
						</div>

						<div class="tab-pane" id="blockView">
							<ul class="thumbnails">
								<!-- inicio codigo a iterar -->
								<?php

								$arrayProductos = json_decode(file_get_contents(DIR_BASE . '/datos/productos.json'), TRUE); // RUTA ABSOLUTA



								foreach ($arrayProductos as $producto) {

								?>
									<li class="span3">
										<div class="thumbnail">
											<a href="product_details.php"><img src="themes/images/products/<?php echo $producto['imagenS1'] ?>" alt="" /></a>
											<div class="caption">
												<h5><?php echo $producto['nombre'] ?></h5>
												<p><?php echo cortar_palabras($producto['descripcion'], 100) ?></p>
												<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo $producto['precio'] ?></a></h4>
											</div>
										</div>
									</li>
								<?php } ?>
							</ul>
							<hr class="soft" />

						</div>



						<div class="pagination">
							<ul>
								<li><a href="#">&lsaquo;</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">&rsaquo;</a></li>
							</ul>
						</div>
						<br class="clr" />
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