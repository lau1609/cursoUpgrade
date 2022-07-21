<?php

header('Content-type: application/json; charset=utf-8');

$servername = "localhost";
$username = "prueba";
$password = "Upgr@d3_22";
$dbname = "curso_php_ajax";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_errno) {
    $respuesta = [
        'error' => true
    ];
}else {
    $conn->set_charset("utf8");
    $resul = $conn->prepare("SELECT * FROM Usuarios");
    $resul->execute();
    $resultados = $resul->get_result();
    
    echo 'holii';
    var_dump($resultados->fetch_all(MYSQLI_ASSOC));
}

$respuesta = array();
echo 'antes del while';

while ($row = $resul->fetch_assoc()) {
    echo 'entro al while';
    $usuario = [
        'id'        => $fila['ID'],
        'nombre'    => $fila['nombre'],
        'edad'      => $fila['edad'],
        'pais'      => $fila['pais'],
        'correo'    => $fila['correo']
    ];
}

echo json_encode($usuario);

echo 'funciono';
?>