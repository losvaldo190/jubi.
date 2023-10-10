<!DOCTYPE html>
<html>
<head>
    <title>Editar Registro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #ccc;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .regresar-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ccc;
            color: #000;
            text-decoration: none;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .regresar-button:hover {
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
    // Verificar si los parámetros se han pasado correctamente
    if (isset($_GET['rfc']) && isset($_GET['Nombre']) && isset($_GET['Apellidopaterno']) && isset($_GET['Apellidomaterno']) && isset($_GET['periodo']) && isset($_GET['Expediente']) && isset($_GET['Cajon'])) {
        // Obtener los valores de los parámetros
        $rfc = $_GET['rfc'];
        $Nombre = $_GET['Nombre'];
        $Apellidopaterno = $_GET['Apellidopaterno'];
        $Apellidomaterno = $_GET['Apellidomaterno'];
        $periodo = $_GET['periodo'];
        $Expediente = $_GET['Expediente'];
        $Cajon = $_GET['Cajon'];
    } else {
        // Si los parámetros no se pasaron correctamente, muestra un mensaje de error
        echo "<p>Faltan parámetros obligatorios.</p>";
        exit; // Termina la ejecución del script si faltan parámetros
    }
    ?>

    <form action="ac_actualizar.php" method="post">
        <input type="hidden" name="rfc" value="<?php echo $rfc; ?>">
        
        <label for="rfc">RFC:</label>
        <input type="text" id="rfc" name="rfc" value="<?php echo $rfc; ?>">
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $Nombre; ?>">

        <label for="apellidopaterno">Apellido Paterno:</label>
        <input type="text" id="apellidopaterno" name="apellidopaterno" value="<?php echo $Apellidopaterno; ?>">

        <label for="apellidomaterno">Apellido Materno:</label>
        <input type="text" id="apellidomaterno" name="apellidomaterno" value="<?php echo $Apellidomaterno; ?>">

        <label for="periodo">Período:</label>
        <input type="text" id="periodo" name="periodo" value="<?php echo $periodo; ?>">

        <label for="expediente">Expediente:</label>
        <input type="text" id="expediente" name="expediente" value="<?php echo $Expediente; ?>">

        <label for="cajon">Cajón:</label>
        <input type="text" id="cajon" name="cajon" value="<?php echo $Cajon; ?>">

        <input type="submit" value="Guardar Cambios">
    </form>

    <!-- Botón para regresar a consulta_por_ciclo.php y cerrar la página actual -->
    <a href="consulta_por_ciclo.php" class="regresar-button" onclick="window.close();">Regresar</a>
   
</body>
</html>







