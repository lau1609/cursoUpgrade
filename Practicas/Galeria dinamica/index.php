<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require 'funciones.php';
$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;
$conn = conexion('laura', 'Upgr@d3_22', 'curso_galeria');
if (!$conn) {
    header ('Location: error.php');
}

$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina";
$result = $conn->query($sql);
$imgData = $result->fetch_all(MYSQLI_ASSOC);

if (!$imgData) {
    header('Location: subir.php');
} else {
       
}



$result = $conn->query ("SELECT FOUND_ROWS() as total_filas");
$total_post = $result->fetch_assoc()['total_filas'];

//echo $total_post;


$total_paginas = ceil($total_post / $fotos_por_pagina);

//7echo "  total paginass " . $total_paginas;

//print_r($fotos);
require 'views/index.view.php';

?>