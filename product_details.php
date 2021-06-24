<!DOCTYPE html>
<html lang="en">

<?php
include_once('config/config.php');
include_once('include/head.php');
include_once('Business/comentariosBusiness.php');
include_once('Business/productosBusiness.php'); ?>


<head>
	<!-- Head====================================================================== -->

	<!-- Head====================================================================== -->
</head>

<body>

	<!-- Header====================================================================== -->
	<?php include_once('include/header.php');




	if (isset($_POST['submitCom'])) {
		businessGuardarComentario($_POST);
	}


	?>
	<!-- Header end====================================================================== -->

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php include_once('include/sidebar.php');

				//	$producto = businessObtenerProducto($_GET['producto']);	//GUARDO EL ARRAY QUE ME TRAIGO DE producto.php

				$arrayProductos = json_decode(file_get_contents(DIR_BASE . 'datos/productos.json'), TRUE);
				//echo "<script>console.log('" . json_encode($arrayProductos) . "');</script>";
				//$jsonProductos = file_get_contents(DIR_BASE.'datos/productos.json');	
				$producto = $arrayProductos[$_GET['producto']];
				?>
				<!-- Sidebar end=============================================== -->
				<!--	
			//	$producto = json_decode(file_get_contents(DIR_BASE.'datos/productos.json'), TRUE); // TRAIGO EL ARRAY DE PRODUCTO
				
				
				//var_dump($producto);
			//	-->

				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a> <span class="divider">/</span></li>
						<li><a href="products.php">Products</a> <span class="divider">/</span></li>
						<li class="active">product Details</li>
					</ul>
					<div class="row">
						<div id="gallery" class="span3">
							<a href="<?php echo str_replace('small', 'xl', $img) ?>" title="Fujifilm FinePix S2950 Digital Camera">
								
							</a>
							<div id="differentview" class="moreOptopm carousel slide">
								<div class="carousel-inner">

									<?php $imagenes = businessObtenerImagenesProducto($producto['id']);
									if (!empty($imagenes)) {
										$active = 'active';
										foreach ($imagenes as $img) { ?>
											<div class="item <?php echo $active;
																$active = ''; ?>">
												<img src="<?php echo str_replace('small', 'big', $img) ?>" alt="">
											</div>
										<?php } ?>
									<?php } else { ?>
										<div class="item active">
											<img src="<?php echo str_replace('small', 'big', $img) ?>" alt="">
										</div>
									<?php } ?>




									<div class="item active">
										<a href="<?php echo str_replace('small', 'xl', $img) ?>"> <img style="width:29%" src="<?php echo str_replace('small','xl',$img)?>" alt="" /></a>
										<a href="<?php echo str_replace('small', 'xl', $img) ?>"> <img style="width:29%" src="<?php echo str_replace('small','xl',$img)?>" alt="" /></a>
										<a href="<?php echo str_replace('small', 'xl', $img) ?>"> <img style="width:29%" src="<?php echo str_replace('small','xl',$img)?>" alt="" /></a>
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
										<button type="button" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
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
						<form name="comentario" method="POST" action="" enctype="">
							Nombre: <input name="nombre" type="text"><br>
							Email: <input name="email" type="text"><br>
							Comentarios:<br>
							<textarea name="comentario"></textarea><br>
							<input type="submit" name="submitCom" value="Enviar">
							<input type="hidden" name="producto" value="<?php echo $producto['id'] ?>"><br>
						</form>

						<?php
						$comentario =  businessObtenerComentarios();
						krsort($comentario);

						foreach ($comentario as $c) {
							if ($producto['id'] == $c['producto']) {
								echo $c['nombre'] . ':' . $c['comentario'] . '<br />';
							}
						}

						?>



					</div>
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