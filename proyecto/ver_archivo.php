<?php
$rfc = isset($_GET["rfc"]) ? $_GET["rfc"] : "";
$archivo = isset($_FILES["archivo"]["name"]) ? $_FILES["archivo"]["name"] : "";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado de los Archivos</title>
   
</head>
<body>
    <h1>Archivos Disponibles</h1>
     <table>
    <tr>
        <td>     
                          
                <?php
                $ruta1 = "docx/" .$rfc. "-HS.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                <a href="docx/<?=$rfc?>-HS.pdf" target="_blank"><img src ='img/hoja de servicios.png' width="30"></a>
                <?php
                }
                ?>
        </td>
        <td>
            <label for="archivo1">Hoja de servicios</label> 
            
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=HS"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
        <td>
        <?php
                $ruta1 = "docx/" .$rfc. "-FOVI.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                    <a href="docx/<?=$rfc?>-FOVI.pdf" target="_blank"><img src ='img/PDFicon.png' width="30"></a>
                <?php
                }
                ?>
        </td>
        <td>
            <label for="archivo2">Hoja de fovissste</label> 
            
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=FOVI"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
    </tr>
    <tr>
        <td>
        <?php
                $ruta1 = "docx/" .$rfc. "-FUP.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                    <a href="docx/<?=$rfc?>-FUP.pdf" target="_blank"><img src ='img/PDFicon.png' width="30"></a>
                <?php
                }
                ?>
        </td>
        <td>
            <label for="archivo3">Formato único de baja</label> 
           
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=FUP"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
        <td>
        <?php
                $ruta1 = "docx/" .$rfc. "-AN.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                    <a href="docx/<?=$rfc?>-AN.pdf" target="_blank"><img src ='img/PDFicon.png' width="30"></a>
                <?php
                }
                ?>
        </td>
        <td>
            <label for="archivo4">Estudio por antigüedad</label> 
           
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=AN"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
    </tr>
    <tr>
        <td>
        <?php
                $ruta1 = "docx/" .$rfc. "-REN.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                    <a href="docx/<?=$rfc?>-REN.pdf" target="_blank"><img src ='img/PDFicon.png' width="30"></a>
                <?php
                }
                ?>
        </td>
        <td>
            <label for="archivo5">Hoja de renuncia</label> 
             
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=REN"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
        <td>
        <?php
                $ruta1 = "docx/" .$rfc. "-PREJ.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                    <a href="docx/<?=$rfc?>-PREJ.pdf" target="_blank"><img src ='img/PDFicon.png' width="30"></a>
                <?php
                }
                ?>
        </td>
        <td>
            <label for="archivo6">Prejubilatorio</label> 
            
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=PREJ"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
    </tr>
    <tr>   
        <td>
        <?php
                $ruta1 = "docx/" .$rfc. "-OB.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                    <a href="docx/<?=$rfc?>-OB.pdf" target="_blank"><img src ='img/PDFicon.png' width="30"></a>
                <?php
                }
                ?>
        </td>
        <td>
            <label for="archivo7">Oficio de baja</label> 
           
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=OB"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
        <td>
        <?php
                $ruta1 = "docx/" .$rfc. "-EST.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                    <a href="docx/<?=$rfc?>-EST.pdf" target="_blank"><img src ='img/PDFicon.png' width="30"></a>
                <?php
                }
                ?>
        </td>
        <td>
            <label for="archivo8">Solicitud de estímulos</label> 
          
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=EST"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
    </tr>
    <tr>   
        <td>
        <?php
                $ruta1 = "docx/" .$rfc. "-AH.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                    <a href="docx/<?=$rfc?>-AH.pdf" target="_blank"><img src ='img/PDFicon.png' width="30"></a>
                <?php
                }
                ?>           
        </td>
        <td>
            <label for="archivo9">Aseguradora Hidalgo</label> 
            
    </form>
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=AH"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
        <td>
        <?php
                $ruta1 = "docx/" .$rfc. "-FORTE.pdf"; 
                $existe1 = file_exists($ruta1);
                if($existe1){?>
                    <a href="docx/<?=$rfc?>-FORTE.pdf" target="_blank"><img src ='img/PDFicon.png' width="30"></a>
                <?php
                }
                ?>
        </td>
        <td>
            <label for="archivo10">Forte</label>
        </td>
        <td>
        <a href="subir_archivo.php?rfc=<?=$rfc?>&archivo=FORTE"><img src="img/file (1).png" alt="Subir Archivo"></a>
        </td>
    </tr>
</table>
<br><br>
<button onclick="regresar()">Regresar</button>
<script>
function regresar() {
    // Regresar a la página anterior
    history.go(-1);

    // Cerrar la página actual
    window.close();
}
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado de los Archivos</title>
    <style>
        /* Add CSS styles for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color:darkgray; /* Table background color */
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        /* Add styles for table headers */
        th {
            background-color: #007BFF; /* Header background color */
            color:#007BFF ; /* Header text color */
        }

        /* Add styles for the buttons */
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Add styles for the images within the table */
        img {
            width: 30px;
        }
    </style>
</head>
<body>
</body>
</html>
