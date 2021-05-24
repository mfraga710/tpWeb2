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
        'nombre'=>'Microsoft',
        'producto'=> 3,
        'activa'=> TRUE

    ),
);

echo json_encode($marca);



?>