<?php
include('menu.php');

if (isset($_POST["submit"])) {
    // Conexión a la base de datos (reemplaza con tus credenciales)
    $conn = new mysqli("127.0.0.1", "sistemas", "12345", "personal");
    
    // Verifica si la conexión a la base de datos fue exitosa
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }
    
    // Recupera los datos del formulario
    $rfc = $_POST["RFC"];
    $Nombre = $_POST["Nombre"];
    $Apellidopaterno = $_POST["Apellidopaterno"];
    $Apellidomaterno = $_POST["Apellidomaterno"];
    $periodo = $_POST["periodo"];
    $Expediente = $_POST["Expediente"];
    $Cajon = $_POST["Cajon"];

    
    // Prepara la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO jubilados (RFC, Nombre, Apellidopaterno, Apellidomaterno, periodo, Expediente, Cajon) VALUES ('$rfc', '$Nombre', '$Apellidopaterno', '$Apellidomaterno', '$periodo', '$Expediente', '$Cajon')";

    
    // Ejecuta la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Los datos se han guardado correctamente en la base de datos.";
    } else {
        echo "Error al guardar los datos en la base de datos: " . $conn->error;
    }
    echo '<br><a href="registro.php">Regresar al formulario</a>';
   
    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
