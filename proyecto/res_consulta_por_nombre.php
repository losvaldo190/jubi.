<?php
 include('menu.php');
 ?>
    <title>consulta por Nombre</title>
</head>
<body>
    
    <?php
    // Inicializar la variable $sql
    $sql = "";
    $showTable = false; // Variable para controlar si se debe mostrar la tabla

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["f_nombre"];
        $Apellido = $_POST["f_Apellido"];

        /*echo "<p>Has proporcionado los siguientes datos:</p>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellidos: $Apellido</p>";*/

        $sql = "SELECT * FROM jubilados";

        if (strlen($nombre) > 0 && strlen($Apellido) > 0) {
            $sql .= " WHERE Nombre LIKE '%$nombre%' AND Apellidopaterno LIKE '%$Apellido%'";
        } else {
            if (strlen($nombre) > 0) {
                $sql .= " WHERE Nombre LIKE '%$nombre%'";
            } else {
                $sql .= " WHERE Apellidopaterno LIKE '%$Apellido%'";
            }
        }

        $showTable = true; // Mostrar la tabla después de realizar la búsqueda
    } else {
        echo "<p>No se han proporcionado datos.</p>";
    }
    ?>

    <?php
    // Mostrar la tabla solo si $showTable es verdadero
    if ($showTable) {
        // Construir y ejecutar la consulta SQL basada en $sql
        $conn = new mysqli("127.0.0.1", "sistemas", "12345", "personal"); 
        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }

        $result = $conn->query($sql);

        if ($result) {
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
            
              while ($row = mysqli_fetch_array($result)) {
                $rfc = $row["RFC"];
                $Nombre = $row["Nombre"];
                $Apellidopaterno = $row["Apellidopaterno"];
                $Apellidomaterno = $row["Apellidomaterno"];
                $periodo = $row["periodo"];
                $Expediente = $row["Expediente"];
                $Cajon = $row["Cajon"];
                
                echo "<tr>
                <td>".$rfc."</td>
                <td>".$Nombre."</td>
                <td>".$Apellidopaterno."</td>
                <td>".$Apellidomaterno."</td>
                <td>".$periodo."</td>
                <td>".$Expediente."</td>
                <td>".$Cajon."</td>
                </tr>";
            }
            
           echo "</tbody>
            </table>";
        } else {
            echo "Error en la consulta: " . $conn->error;
        }

        $conn->close();
    }
    ?>
   
    <!-- Botón para regresar a la página principal -->
    <button id="regresar">Regresar</button>
    
    <script>
        // Obtener una referencia al botón
        const botonRegresar = document.getElementById("regresar");
        
        // Agregar un evento click al botón
        botonRegresar.addEventListener("click", function() {
            // Redirigir a la página principal (cambiar "insertar.html" por la ruta correcta)
            window.location.href = "consulta_por_nombre.php";
        });
    </script>