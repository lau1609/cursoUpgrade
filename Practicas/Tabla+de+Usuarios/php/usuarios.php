<?php

header('Content-type: application/json; charset=utf-8');

$respuesta = [
    [
        'id' => '62d6e60890421fef235d1ee2',
        'nombre' => 'Carlos',
        'edad' => 23,
        'pais' => 'Mexico',
        'correo' => 'steinreid@frenex.com'   
    ],
    [
        'id' => '62d6e60890421fef235d1ee2',
        'nombre' => 'Carlos',
        'edad' => 23,
        'pais' => 'Mexico',
        'correo' => 'steinreid@frenex.com' 
    ]
];

echo json_encode($respuesta);

?>