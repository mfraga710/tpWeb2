<?php 
$categorias = array (
    '1'=> array(
        'id'=> 1,
        'nombre'=>'Camaras',
        'activa'=> FALSE

    ),
    '2'=> array(
        'id'=> 2,
        'nombre'=>'Celulares',
        'activa'=> TRUE

    ),
    '3'=> array(
        'id'=> 3,
        'nombre'=>'Memorias',
        'activa'=> FALSE

    ),
);

echo json_encode($categorias);


?>