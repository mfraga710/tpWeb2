<?php 
$categorias = array (
    '1'=> array(
        'id'=> 1,
        'nombre'=>'remeras',
        'activa'=> FALSE

    ),
    '2'=> array(
        'id'=> 2,
        'nombre'=>'pantalones',
        'activa'=> TRUE

    ),
    '3'=> array(
        'id'=> 3,
        'nombre'=>'buzos',
        'activa'=> FALSE

    ),
);

echo json_encode($categorias);


?>