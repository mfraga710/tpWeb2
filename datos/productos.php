<?php
$productos = array (
    '1'=> array(
        'id'=> 1,
        'nombre'=>'Remeras Avenue',
        'marca'=> 1,
        'precio'=> 1350,
        'descripcion'=> 'Remeras manchadas',
        'categoria'=> 1,
        'comentarios'=> 1,
        'activa'=> TRUE

    ),
    '2'=> array(
        'id'=> 2,
        'nombre'=>'Pantalones',
        'marca'=> 2,
        'precio'=> 856,
        'descripcion'=> 'Pantalones rotos',
        'categoria'=> 1,
        'comentarios'=> 1,
        'activa'=> TRUE

    ),
    '3'=> array(
        'id'=> 3,
        'nombre'=>'Buzos',
        'marca'=> 3,
        'precio'=> 628,
        'descripcion'=> 'No abrigan nada',
        'categoria'=> 1,
        'comentarios'=> 1,
        'activa'=> TRUE

    ),
    '4'=> array(
        'id'=> 4,
        'nombre'=>'Calzones',
        'marca'=> 4,
        'precio'=> 8000,
        'descripcion'=> 'Calzones usados',
        'categoria'=> 1,
        'comentarios'=> 1,
        'activa'=> TRUE

    ),    
    '5'=> array(
        'id'=> 5,
        'nombre'=>'Zapatillas',
        'marca'=> 5,
        'precio'=> 7000,
        'descripcion'=> 'Zapatillas con aeroventilas',        
        'categoria'=> 1,
        'comentarios'=> 1,
        'activa'=> TRUE

    ),    
    '6'=> array(
        'id'=> 6,
        'nombre'=>'Medias',
        'marca'=> 5,
        'precio'=> 300,
        'descripcion'=> 'Medias sucias',        
        'categoria'=> 1,
        'comentarios'=> 1,
        'activa'=> TRUE

    ),    
);

echo json_encode($productos);



?>