<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario =  filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    //echo "$usuario . $password . $password2";

    $errores = '';

    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores .= '<li> Por favor rellena todos los datos correctamente </li>';
    }else {
        $servername = "localhost";
        $username = "laura";
        $pass = "Upgr@d3_22";
        $dbname = "curso_login";

        // Create connection
        $conn = mysqli_connect($servername, $username, $pass, $dbname);
        // Check connection
  //  }
/*         if (!$conn) {
        die("La conexion  fallo: " . mysqli_connect_error());
}else {
    echo "se hizo la conexion";
} */

$consulta = mysqli_query ($conn, "SELECT * FROM Usuarios WHERE usuario = '$usuario'");
//echo 'la variable consulta ' . $consulta;

        if($user = mysqli_fetch_assoc($consulta) ) {

            $errores .= "<li>El nombre de usuario ya existe</li>";

            } else {
                if ($password != $password2) {
                    $errores .= '<li>Las contraseñas no son iguales</li>';  
            }else {
                $password = hash('sha512', $password);
                $password2 = hash('sha512', $password2);
                $sql = "INSERT INTO Usuarios (usuario, pass)
                VALUES ('$usuario', '$password')";
                header('Location: login.php');
                
                if (mysqli_query($conn, $sql)) {
                  echo "New record created successfully";
                } else {
                 // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            
            }

        }
    }

require 'views/registrate.view.php';

?>