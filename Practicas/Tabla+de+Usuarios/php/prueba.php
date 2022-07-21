<?php
header('Content-type: application/json; charset=utf-8');

$servername = "localhost";
$username = "prueba";
$password = "Upgr@d3_22";
$dbname = "curso_php_ajax";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->query("SET NAMES 'utf8'");
echo 'prueba';
if ($conn->connect_error) {
	die('Error en la Conexión a la Base de Datos : ('. $conn->connect_errno .') '. $conn->connect_error);
}

$results = $conn->query("SELECT * FROM Usuarios");

$rows['Usuarios'] = array();

while($r = $results->fetch_object()) {
    array_push($rows['Usuarios'], $r);
}

$mysql_json = json_encode($rows, 128);

print($mysql_json);
?>