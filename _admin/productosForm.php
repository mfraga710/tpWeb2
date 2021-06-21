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
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include_once('config/config.php');
    include_once(DIR_BASE.'helpers/urls.php');
    include_once(DIR_BASE.'helpers/image.php');
    
    include_once(DIR_BASE.'Business/productosBusiness.php');
    include_once(DIR_BASE.'Business/categoriasBusiness.php');
    include_once(DIR_BASE.'Business/marcasBusiness.php');

    if(isset($_POST['submit'])){
      if(!empty($_GET['edit'])){
          businessModificarProducto($_POST,$_GET['edit']);
      }else{
          businessGuardarProducto($_POST);
      }
    
       redirect('productosListado.php');
    }
    
    $producto = array( 'nombre' => '','precio' => '','categoria' => '','marca' => '','activa' => '','descripcion'=>'', 'imagen' => '');
    if(!empty($_GET['edit'])){
      $producto = businessObtenerProducto($_GET['edit']);
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

            <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo $producto['nombre']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Categori¡ía</label>
                    <select name="categoria">
                      <?php foreach(businessObtenerCategorias() as $cat){?>
                        <option value="<?php echo $cat['id']?>" <?php echo ($cat['id'] == $producto['categoria'])?'selected':'' ?>> <?php echo $cat['nombre']?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Marca</label>
                    <select name="marca">
                    <?php foreach(businessObtenerMarcas() as $marca){?>
                        <option value="<?php echo $marca['id']?>" <?php echo ($marca['id'] == $producto['marca'])?'selected':'' ?> > <?php echo $marca['nombre']?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="precio" value="<?php echo $producto['precio']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Activo</label>
                    <input type="checkbox" class="form-check-label" id="exampleInputEmail1" value="true" name="activa" <?php echo ($producto['activa']==TRUE)?'checked':'' ?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <textarea class="form-control" name="descripcion"><?php echo $producto['descripcion']?></textarea>
                  </div>
                 <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="imagen[]" multiple class="custom-file-input" id="exampleInputFile">  
                        <!--<input type="hidden" name="old_imagen" value="<?php //echo $producto['imagen'] ?>" class="custom-file-input" id="exampleInputFile">-->
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        
                      </div> 
                    </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
                

            <!-- ============================================================== -->
            <!-- end hoverable table -->
            <!-- ============================================================== -->            
            <!-- ============================================================== -->
           

            <?php

include_once('include/footer.php'); 

?>


</body>
 
</html>
