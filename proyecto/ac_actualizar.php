<!DOCTYPE html>
<html>
<head>
    <title>Datos Actualizados</title>
</head>
<body>
    <h1>Datos Actualizados</h1>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $rfc = $_POST["rfc"];
    $nombre = $_POST["nombre"];
    $Apellidopaterno = $_POST["apellidopaterno"];
    $Apellidomaterno = $_POST["apellidomaterno"];
    $periodo = $_POST["periodo"];
    $Expediente = $_POST["expediente"];
    $Cajon = $_POST["cajon"];

    // Realiza la conexión a la base de datos (reemplaza con tus propios valores)
    $host = "127.0.0.1";
    $username = "sistemas";
    $password = "12345";
    $database = "personal";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Ejecuta la consulta SQL para actualizar los datos
    $sql = "UPDATE jubilados SET nombre='$nombre', Apellidopaterno='$Apellidopaterno', Apellidomaterno='$Apellidomaterno', periodo='$periodo', Expediente='$Expediente', Cajon='$Cajon' WHERE rfc='$rfc'";

     

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }

    $conn->close();
}
?>


<script>
   
    function regresarYCerrar() {
        window.location.href = 'consulta_por_ciclo.php';
        window.close();
    }
</script>

<br> <!-- Agrega un salto de línea para separar el mensaje del botón -->

<!-- Botón para regresar a consulta_por_ciclo.php y cerrar la página actual -->
<button onclick="regresarYCerrar()">Regresar</button>
