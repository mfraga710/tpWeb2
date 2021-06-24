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
	<?php include_once('helpers/image.php'); ?>
	<!-- Header end================================================================== -->

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php include_once('include/sidebar.php'); ?>
				<!-- Sidebar end=============================================== -->

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
									<?php $img = obtener_imagenes('themes/images/products/'.$producto['id'].'/'); 
										//var_dump($img);
										//echo('themes/images/products/'.$producto['id']);
										//die();
										 ?>
									<a href="product_details.php?producto=<?php echo $producto['id']?>"><img src="<?php echo str_replace('small','big',$img[0])?>" alt="" /></a>
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