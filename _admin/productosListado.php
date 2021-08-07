<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>
<?php
include_once('../config/config.php');
//include_once('config/config.php');
include_once(DIR_BASE . 'helpers/urls.php');
include_once(DIR_BASE . 'helpers/image.php');
include_once(DIR_BASE . 'Business/productosBusiness.php');
include_once(DIR_BASE . 'Business/categoriasBusiness.php');
include_once(DIR_BASE . 'Business/marcasBusiness.php');

$marcas = businessObtenerMarcas();
$categorias = businessObtenerCategorias();

if (isset($_GET['del'])) {
    businessBorrarProducto($_GET['del']);
    redirect('productosListado.php');
}
?>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php
        include_once('include/index_navbar.php');
        ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php
        include_once('include/left_navbar.php');
        ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Productos</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="productosForm.php" class="breadcrumb-link">Productos</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- hoverable table -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Productos<a href="productosForm.php"><i class="fas fa-plus"></i></a></h5>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Activo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (businessObtenerProductos() as $prod) {
                                    $print = true;
                                    if (!empty($_GET['categoria']) and $print) {
                                        if ($prod['categoria'] != $_GET['categoria']) $print = FALSE;
                                    }
                                    if (!empty($_GET['marca']) and $print) {
                                        if ($prod['marca'] != $_GET['marca']) $print = FALSE;
                                    }
                                    if ($print) {
                                ?>
                                        <tr>
                                            <td><?php echo $prod['id'] ?></td>
                                            <td><?php echo $prod['nombre'] ?></td>
                                            <td><?php echo $categorias[$prod['categoria']]['nombre'] ?></td>
                                            <td><?php echo $marcas[$prod['marca']]['nombre'] ?></td>
                                            <td><?php echo $prod['precio'] ?></td>
                                            <td><?php echo $prod['activa'] ? 'SI' : 'NO' ?></td>
                                            <td>
                                                <a href="productosForm.php?edit=<?php echo $prod['id'] ?>"><i class="far fa-edit"></i></a>
                                                <a href="productosListado.php?del=<?php echo $prod['id'] ?>"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end hoverable table -->
            <!-- ============================================================== -->


            <?php

            include_once('include/footer.php');

            ?>


</body>

</html>