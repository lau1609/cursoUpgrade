<?php

require 'funciones.php';

$conn = conexion('laura', 'Upgr@d3_22', 'curso_galeria');

require 'views/subir.view.php';

if (!$conn) {
    header ('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    if ($check !== false) {
        $carpeta_destino = 'imagenes/';
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

        $titulo = $_POST['titulo'];
        $imagen = $_FILES['foto']['name'] ;
        $texto = $_POST['texto'];
        '</br>';

        $sql = "INSERT INTO fotos (titulo, imagen, texto)
        VALUES ('$titulo', '$imagen', '$texto')";

       

         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header('Location: index.php');
          } else {
            echo "Error: " . $sql . "<br>" ;
          }

    }else {
        $error = "El archivo no es una imagen o es muy pesado";
    } 

}

?>