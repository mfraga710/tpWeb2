<div id="sidebar" class="span3">
	<div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart <span class="badge badge-warning pull-right">$155.00</span></a></div>
	<ul id="sideManu" class="nav nav-tabs nav-stacked">
		<!-- inicio codigo a iterar -->
		<?php
		$arrayCategoria = json_decode(file_get_contents(DIR_BASE . '/datos/categoria.json'), TRUE); // RUTA ABSOLUTA
		foreach ($arrayCategoria as $categoria) {
		?>	
			<li class="subMenu open"><a><?php echo $categoria['nombre'] ?></a>
				<ul>
					<?php
					$arrayMarca = json_decode(file_get_contents(DIR_BASE . '/datos/marca.json'), TRUE); // RUTA ABSOLUTA
					foreach ($arrayMarca as $marca) {
					?>					
						<li><a class="active" href="products.php"><i class="icon-chevron-right"></i><?php echo $marca['nombre'] ?></a></li>
					<?php } ?>								
				</ul>
			</li>
		<?php } ?>		
	</ul>

	<div class="thumbnail">
		<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
		<div class="caption">
			<h5>Payment Methods</h5>
		</div>
	</div>
</div>