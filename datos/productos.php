<?php
$productos = array (
    '1'=> array(
        'id'=> 1,
        'nombre'=>'Nikon Coolpix A100',
        'marca'=> 1,
        'precio'=> 1350,
        'descripcion'=> 'Cámara digital compacta, 
                        16,1 millones de píxeles, 
                        Sensor DTC de 1/2.3 pulgadas, 
                        Objetivo NIKKKKOR con zoom óptico de 5 aumentos, 
                        Desenfoque de movimiento reducido: garantiza fotografías nítidas, 
                        Vídeos HD, 
                        230.000 píxeles 6,7 cm (2,7 pulgadas) Monitor LCD TFT, 
                        Selector automático de escenas, 
                        Numerosos efectos especiales y maquillaje, 
                        Sistema de retrato optimizado, 
                        Diseño moderno, compacto y elegante, 
                        Mango ergonómico: fácil de manejar',
        'categoria'=> 1,
        'imagenL'=> '1L.jpg',
        'imagenS1'=> '1s1.jpg',
        'imagenS2'=> '1s2.jpg',
        'imagenS3'=> '1s3.jpg',
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
        'imagenL'=> '1.jpg',
        'imagenS1'=> '1s1.jpg',
        'imagenS2'=> '1.jpg',
        'imagenS3'=> '1.jpg',
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
        'imagenL'=> '1.jpg',
        'imagenS1'=> '1s1.jpg',
        'imagenS2'=> '1.jpg',
        'imagenS3'=> '1.jpg',
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
        'imagenL'=> '1.jpg',
        'imagenS1'=> '1s1.jpg',
        'imagenS2'=> '1.jpg',
        'imagenS3'=> '1.jpg',
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
        'imagenL'=> '1.jpg',
        'imagenS1'=> '1s1.jpg',
        'imagenS2'=> '1.jpg',
        'imagenS3'=> '1.jpg',
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
        'imagenL'=> '1.jpg',
        'imagenS1'=> '1s1.jpg',
        'imagenS2'=> '1.jpg',
        'imagenS3'=> '1.jpg',
        'comentarios'=> 1,
        'activa'=> TRUE

    ),    
);

echo json_encode($productos);



?>