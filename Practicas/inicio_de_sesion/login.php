<?php session_start();


if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower ($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $servername = "localhost";
    $username = "laura";
    $pass = "Upgr@d3_22";
    $dbname = "curso_login";

// Create connection
    $conn = mysqli_connect($servername, $username, $pass, $dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $consulta = mysqli_query ($conn, "SELECT * FROM Usuarios WHERE usuario = '$usuario' AND pass = '$password'");

    if($user = mysqli_fetch_assoc($consulta) ) {

        echo 'Inicio sesion';
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');

}else {
    $errores .= "<li>El usuario o contraseña son incorrectos</li>";
}

}

require 'views/login.view.php';

?>