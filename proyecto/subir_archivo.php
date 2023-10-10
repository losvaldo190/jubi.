<?php
$rfc=$_GET["rfc"];
$archivo=$_GET["archivo"];
$uploadDirectory = "docx/";
/*echo $rfc;
echo"<br>";
echo $archivo;
return;*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivos</title>
    <style>
        /* Estilo para el botón "Regresar" */
        .regresar-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Color de fondo del botón */
            color: #fff; /* Color del texto del botón */
            text-decoration: none;
            border: 1px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px; /* Espaciado superior para separar el botón del formulario */
        }

        /* Cambiar el color de fondo cuando se pasa el cursor sobre el botón */
        .regresar-button:hover {
            background-color: #0056b3; /* Nuevo color de fondo en el hover */
        }
    </style>
</head>
<body>
    <h1>Subir Archivos</h1>
    <form action="accion_subir_archivo.php" method="POST" enctype="multipart/form-data">
        <label for="rfc">RFC:</label>
        <input type="text" name="rfc" id="rfc" value="<?=$rfc?>"/>
        <br>
        <label for="archivo">Archivo:</label>
        <input type="text" name="archivo" id="archivo" value="<?=$archivo?>"/>
        <br>
        <label for="archivo">Selecciona un archivo (PDF):</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Subir Archivo">
    </form>
    <a href="ver_archivo.php?rfc=<?=$rfc?>" class="regresar-button">Regresar</a>
</body>
</html>
