<?php
require 'funciones.php';

$conn = conexion('laura', 'Upgr@d3_22', 'curso_galeria');

if (!$conn) {
    header ('Location: error.php');
}


$id = isset($_GET['id']) ? (int)$_GET['id'] : false;
if (!$id) {
    echo 'no funciono el id';
    //header('Location: index.php');
}



$result = $conn->query("SELECT * FROM fotos WHERE ID = $id");
$foto = $result->fetch_all(MYSQLI_ASSOC);
/* echo 'ñeñe';
echo 'el array es';
print_r ($foto); */


if (!$foto) {
    //header('Location: index.php');
}

require 'views/foto.view.php';

?>