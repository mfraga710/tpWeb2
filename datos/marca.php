<?php
$marca = array (
    '1'=> array(
        'id'=> 1,
        'nombre'=>'Nikon',
        'producto'=> 1,
        'activa'=> FALSE

    ),
    '2'=> array(
        'id'=> 2,
        'nombre'=>'Fujifilm',
        'producto'=> 2,
        'activa'=> FALSE

    ),
    '3'=> array(
        'id'=> 3,
        'nombre'=>'Sandisk',
        'producto'=> 3,
        'activa'=> TRUE

    ),
);

echo json_encode($marca);



?>