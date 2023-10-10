<!DOCTYPE html>
<html>
<head>
    <title>Menú</title>
    <style>
/* Estilos del texto */
.text-container {
    text-align: center;
    margin-top: 20px;
}

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 60vh;
            margin: 0;
            background-color:snow;
        }

        h1 {
            text-align: center;
        }

        /* Estilo para la tabla de enlaces */
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        a:hover {
            color: #00f; /* Cambia el color al pasar el mouse sobre los enlaces */
        }
    </style>
</head>

    <h1>Seleccione una opcion</h1>

    <table border='1' bordercolordark='#000066'  class='Estilo5'> 
     <tr> 
     <td><a href="consulta_por_ciclo.php"><b>Consulta por ciclo</b></a></td>
     <td><a href="consulta_por_nombre.php"><b>Consulta por nombre</b></a></td>
     <td><a href="registro.php"><b>Registro</b></a></td>
     <td><a href="login.html"><b>Salir</b></a></td>
     </tr> 
    </table>


