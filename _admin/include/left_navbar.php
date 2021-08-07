<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="true" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu show">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="categoriasListado.php">Categorias</a>
                                    <ul>
                                        <!-- inicio codigo a iterar -->
                                        <?php
                                        $arrayCategoria = json_decode(file_get_contents(DIR_BASE . 'datos/categoria.json'), TRUE); // RUTA ABSOLUTA
                                        foreach ($arrayCategoria as $categoria) {
                                        ?>
                                            <li><a class="active" href="categoriasListado.php?categoria=<?php echo $categoria['id'] ?>">
                                                    <i class="icon-chevron-right"></i><?php echo $categoria['nombre'] ?></a></li>
                                        <?php } ?>
                                        <li><a class="active" href="categoriasListado.php?categoria="><i class="icon-chevron-right"></i>Todas</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="marcasListado.php">Marcas</a>
                                    <ul>
                                        <!-- inicio codigo a iterar -->
                                        <?php
                                        $arrayMarca = json_decode(file_get_contents(DIR_BASE . 'datos/marca.json'), TRUE); // RUTA ABSOLUTA
                                        foreach ($arrayMarca as $marca) {
                                        ?>
                                            <li><a class="active" href="marcasListado.php?marca=<?php echo $marca['id'] ?>">
                                                    <i class="icon-chevron-right"></i><?php echo $marca['nombre'] ?></a></li>
                                        <?php } ?>
                                        <li><a class="active" href="marcasListado.php?marca="><i class="icon-chevron-right"></i>Todas</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="productosListado.php">Productos</a>
                                    <ul>
                                        <li class="nav-item">Categorias
                                            <ul>
                                                <!-- inicio codigo a iterar -->
                                                <?php
                                                $arrayCategoria = json_decode(file_get_contents(DIR_BASE . 'datos/categoria.json'), TRUE); // RUTA ABSOLUTA
                                                foreach ($arrayCategoria as $categoria) {
                                                ?>
                                                    <li><a class="active" href="productosListado.php?categoria=<?php echo $categoria['id'] ?>&marca=<?php echo (isset($_GET['marca'])) ? $_GET['marca'] : ""; ?>">
                                                            <i class="icon-chevron-right"></i><?php echo $categoria['nombre'] ?></a></li>
                                                <?php } ?>
                                                <li><a class="active" href="productosListado.php?categoria=&marca=<?php echo (isset($_GET['marca'])) ? $_GET['marca'] : ""; ?>"><i class="icon-chevron-right"></i>Todas</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">Marcas
                                            <ul>
                                                <!-- inicio codigo a iterar -->
                                                <?php
                                                $arrayMarca = json_decode(file_get_contents(DIR_BASE . 'datos/marca.json'), TRUE); // RUTA ABSOLUTA
                                                foreach ($arrayMarca as $marca) {
                                                ?>
                                                    <li><a class="active" href="productosListado.php?marca=<?php echo $marca['id'] ?>&categoria=<?php echo (isset($_GET['categoria'])) ? $_GET['categoria'] : ""; ?>">
                                                            <i class="icon-chevron-right"></i><?php echo $marca['nombre'] ?></a></li>
                                                <?php } ?>
                                                <li><a class="active" href="productosListado.php?marca=&categoria=<?php echo (isset($_GET['categoria'])) ? $_GET['categoria'] : ""; ?>"><i class="icon-chevron-right"></i>Todas</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="active" href="marcasListado.php?marca="><i class="icon-chevron-right"></i>Todas</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="comentariosListado.php">Comentarios</a>
                                    <ul>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">Productos <span class="badge badge-success">6</span></a>
                                            <div id="submenu-2" class="collapse submenu">
                                                <ul>
                                                    <!-- inicio codigo a iterar -->
                                                    <?php
                                                    $arrayProducto = json_decode(file_get_contents(DIR_BASE . 'datos/productos.json'), TRUE); // RUTA ABSOLUTA
                                                    foreach ($arrayProducto as $producto) {
                                                    ?>
                                                        <li><a class="active" href="comentariosListado.php?producto=<?php echo $producto['id'] ?>">
                                                                <i class="icon-chevron-right"></i><?php echo $producto['nombre'] ?></a></li>
                                                    <?php } ?>
                                                    <li><a class="active" href="comentariosListado.php?producto="><i class="icon-chevron-right"></i>Todas</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>