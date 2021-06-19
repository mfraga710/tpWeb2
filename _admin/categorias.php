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
    include_once ('config/config.php');
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
                            <h2 class="pageheader-title">Categorias</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Categorias</a></li>
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
                    <h5 class="card-header text-center">Categorias</h5>
                    <a href="#" class="btn btn-primary btn-block">Agregar Categoria</a> 
                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cambios</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Categoria 1</td>
                                    <td><a href="#" class="btn btn-success">Editar</a><a href="#" class="btn btn-danger">Borrar</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Categoria 2</td>
                                    <td><a href="#" class="btn btn-success">Editar</a><a href="#" class="btn btn-danger">Borrar</a></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Categoria 3</td>
                                    <td><a href="#" class="btn btn-success">Editar</a><a href="#" class="btn btn-danger">Borrar</a></td>                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- end hoverable table -->
            <!-- ============================================================== -->            
            <!-- ============================================================== -->
            <?php

include('include/footer.php'); 

?>
</body>
 
</html>
