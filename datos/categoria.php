<?php 
$categorias = array (
    '1'=> array(
        'id'=> 1,
        'nombre'=>'Camaras',
        'activa'=> TRUE

    ),
    '2'=> array(
        'id'=> 2,
        'nombre'=>'Memorias',
        'activa'=> TRUE

    ),
);

echo json_encode($categorias);


?>