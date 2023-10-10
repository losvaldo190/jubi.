<?php
session_start();

$host = "127.0.0.1";
$userdb = "sistemas";
$pwd = "12345";
$btbd = "usuarios";

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['contra']; // Asegúrate de que coincida con el nombre del campo en tu formulario

// Conexión a la base de datos
$conn = mysqli_connect($host, $userdb, $pwd, $btbd);

if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

// Consulta SQL para verificar las credenciales del usuario
$consulta = "SELECT * FROM usuarios WHERE Usuario='$username' AND Password='$password'";
$resultado = mysqli_query($conn, $consulta);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conn));
}

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    // Inicio de sesión exitoso
    $_SESSION['username'] = $username;
    header("Location: menu.php"); // Redireccionar a la página de inicio después del inicio de sesión
} else {
    // Credenciales incorrectas
    echo "Error en la autenticación. <a href='login.html'>Volver a intentar</a>";
}

mysqli_close($conn);
?>
<form action="menu.php" method="post">

