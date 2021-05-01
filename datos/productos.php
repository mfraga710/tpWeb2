<?php
$productos = array (
    '1'=> array(
        'id'=> 1,
        'nombre'=>'Remeras Avenue',
        'marca'=> 1,
        'precio'=> 1350,
        'categoria'=> 1,
        'comentarios'=> 1,
        'activa'=> TRUE

    ),
    '2'=> array(
        'id'=> 2,
        'nombre'=>'Pantalones',
        'marca'=> 2,
        'precio'=> 856,
        'categoria'=> 1,
        'comentarios'=> 1,
        'activa'=> TRUE

    ),
    '3'=> array(
        'id'=> 3,
        'nombre'=>'Buzos',
        'marca'=> 3,
        'precio'=> 628,
        'categoria'=> 1,
        'comentarios'=> 1,
        'activa'=> TRUE

    ),
);

echo json_encode($productos);



?>