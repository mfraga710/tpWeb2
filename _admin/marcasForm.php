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

<body>
  <?php
    include_once('config/config.php');
    include_once(DIR_BASE.'helpers/urls.php');
    include_once(DIR_BASE.'Business/productosBusiness.php');
    include_once(DIR_BASE.'Business/categoriasBusiness.php');
    include_once(DIR_BASE.'Business/marcasBusiness.php');

    if(isset($_POST['submit'])){
      if(!empty($_GET['edit'])){
        businessModificarMarca($_POST, $_GET['edit']);
      }else{ 
        //var_dump($_POST);die();
        businessGuardarMarca($_POST);
        
      }  
      redirect('marcasListado.php');
    }

    $marca = array('nombre'=>'','activa'=> '');
    if(!empty($_GET['edit'])){
      $marca = businessObtenerMarca($_GET['edit']);

    }


  ?>
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
              <h2 class="pageheader-title">Marcas</h2>
              <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="marcasForm.php" class="breadcrumb-link">Marcas</a></li>
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


      <div class="card-body">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Agregar/Modificar</h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo $marca['nombre']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Activo</label>
                  <input type="checkbox" class="form-check-label" id="exampleInputEmail1" value="true" name="activa" <?php echo($marca['activa']==TRUE)?'checked':'' ?>>
                </div>
              </div>
              <div class="card-footer">
                 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>


      <!-- ============================================================== -->
      <!-- end hoverable table -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->


      <?php

      include_once('include/footer.php');

      ?>


</body>

</html>
