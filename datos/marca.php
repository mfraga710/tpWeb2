<?php
$marca = array (
    '1'=> array(
        'id'=> 1,
        'nombre'=>'Nikon',
        'producto'=> 1,
        'activa'=> TRUE

    ),
    '2'=> array(
        'id'=> 2,
        'nombre'=>'Fujifilm',
        'producto'=> 2,
        'activa'=> TRUE

    ),
    '3'=> array(
        'id'=> 3,
        'nombre'=>'Sandisk',
        'producto'=> 3,
        'activa'=> TRUE

    ),
    '4'=> array(
        'id'=> 4,
        'nombre'=>'Todos',
        'activa'=> FALSE

    ),
);

echo json_encode($marca);



?>