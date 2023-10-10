<?php


 include('menu.php');
 
$username = "sistemas";
$password = "12345";
$host = "127.0.0.1";
$database = "personal";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the desired periodo from the form
    $desiredPeriodo = $_POST["periodo"];

    // Validate the periodo (you can add more validation as needed)
    if (!empty($desiredPeriodo)) {
        // SQL query to retrieve records for the specified periodo
        $sql = "SELECT * FROM jubilados WHERE periodo = '" . mysqli_real_escape_string($conn, $desiredPeriodo) . "'";

        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        // Check if there are any results
        if (mysqli_num_rows($result) > 0) {
            echo "<table align='center'>
		       <tbody>
			   <tr>
				<td>RFC</td>
				<td>Nombre</td>
				<td>ApellidoPaterno</td>
				<td>ApellidoMaterno</td>
				<td>periodo</td>
				<td>Expediente</td>
				<td>Cajon</td>
			   </tr>";
		    while($row = mysqli_fetch_array($result)){
                $rfc = $row["RFC"];
                $Nombre = $row["Nombre"];
                $Apellidopaterno = $row["Apellidopaterno"];
                $Apellidomaterno = $row["Apellidomaterno"];
                $periodo = $row["periodo"];
                $Expediente = $row["Expediente"];
                $Cajon = $row["Cajon"];
                //echo "RFC: ".$rfc."<br/>";
                echo "<tr>
                <td>".$rfc."</td>
                <td>".$Nombre."</td>
                <td>".$Apellidopaterno."</td>
                <td>".$Apellidomaterno."</td>
                <td>".$periodo."</td>
                <td>".$Expediente."</td>
                <td>".$Cajon."</td>
                <td>
                <a href='editar_registro.php?rfc=" . urlencode($rfc) . "&Nombre=" . urlencode($Nombre) . "&Apellidopaterno=" . urlencode($Apellidopaterno) . "&Apellidomaterno=" . urlencode($Apellidomaterno) . "&periodo=" . urlencode($periodo) . "&Expediente=" . urlencode($Expediente) . "&Cajon=" . urlencode($Cajon) . "' target='_blank'>
                <button class='edit-button' data-rfc='" . $rfc . "'>Editar</button></a>
                <a href='ver_archivo.php?rfc=" . urlencode($rfc) . "' target='_blank'>
                <button class='edit-button' data-rfc='" . $rfc . "'>Ver</button></a>
                <a href='subir_archivo.php?rfc=" . urlencode($rfc) . "' target='_blank'>
                <button class='edit-button' data-rfc='" . $rfc . "'>Subir</button></a>
                </td>
                </tr>";



 
		    }
		    echo "</tbody>
		    </table>";
            
        } else {
            echo "No se encontraron registros para el ciclo ingresado.";
        }
    } else {
        echo "Ciclo no válido. Por favor, ingrese un ciclo válido.";
    }
 }

      // Close the database connection
   mysqli_close($conn);
?>

<!-- Botón para regresar a la página principal -->
<button id="regresar">Regresar</button>
    
    <script>
        // Obtener una referencia al botón
        const botonRegresar = document.getElementById("regresar");
        
        // Agregar un evento click al botón
        botonRegresar.addEventListener("click", function() {
            // Redirigir a la página principal (cambiar "insertar.html" por la ruta correcta)
                        window.location.href = "consulta_por_ciclo.php";
        });
    </script>

