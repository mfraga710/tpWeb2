<!DOCTYPE php>
<php lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
<!-- Barra de navegación -->
<?php include_once ('include/header.php') ?>

    <!-- Banner -->
    <?php include_once ('include/banner2.php') ?>

    <div class="container">
        <div class="columns">
            <div class="column">
                <h2 class="is-size-4">Iniciar seción</h2>
                <form action="#" class="form-control">

                    <input type="email" placeholder="Email" class="form-control-field error">

                    <input type="password" placeholder="Password" class="form-control-field">

                    <button class="btn btn-default btn-primary">Iniciar seción</button>
                </form>
            </div>
            <div class="column">
                <h2 class="is-size-4">Registro</h2>
                <form action="#" class="form-control">
                    <input type="email" placeholder="Email" class="form-control-field">

                    <input type="password" placeholder="Password" class="form-control-field">

                    <input type="password" placeholder="Confirma tu password" class="form-control-field">
                        
                    <button class="btn btn-default btn-primary">Crear cuenta</button>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once ('include/footer.php') ?>
    <script src="js/main.js"></script>


</body>

</php>