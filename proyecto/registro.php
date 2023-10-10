 <?php
    include('menu.php');

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $rfc = $_POST['RFC'];
        $Nombre = $_POST['Nombre'];
        $Apellidopaterno = $_POST['Apellidopaterno'];
        $Apellidomaterno = $_POST['Apellidomaterno'];
        $periodo = $_POST['periodo'];
        $Expediente = $_POST['Expediente'];
        $Cajon = $_POST['Cajon'];
        
        // You can now use these variables to insert the data into your database or perform any other necessary actions.
    }

    ?>

    <h2>Agregar Registro</h2>
    <form action="agregar_registro.php" method="post">

        <Table b order ="1">
        <tr>
            <td><label for="RFC">RFC:</label></td>
            <td><input type="text" name="RFC" id="RFC" required></td>
        </tr>
        
        <tr>
          <td><label for="Nombre">Nombre:</label></td>
          <td><input type="text" name="Nombre" id="Nombre" required></td>
        </tr>

        
        <tr>
          <td><label for="Apellidopaterno">ApellidoPaterno:</label></td>
          <td><input type="text" name="Apellidopaterno" id="Apellidopaterno" required></td>
        </tr>
       
       
        <tr>   
           <td><label for="Apellidomaterno">ApellidoMaterno:</label></td>
           <td><input type="text" name="Apellidomaterno" id="ApellidoMaterno" required></td>
        </tr>

        
        <tr>    
          <td><label for="periodo">Periodo:</label></td>
          <td><input type="text" name="periodo" id="periodo" required></td>
        </tr> 
        
     
        <tr>  
            <td><label for="Expediente">Expediente:</label></td>
            <td><input type="text" name="Expediente" id="Expediente" required></td>
        </tr> 

        <tr> 
           <td><label for="Cajon">Cajón:</label></td>
           <td><input type="text" name="Cajon" id="Cajon" required></td>
        </tr> 
        </Table b order ="1">
      
        <input type="submit" name="submit" value="Guardar">
</form>


    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        
        
        form {
            
            width: 200px;
            text-align: left;
        }
    
        th, td {
            padding: 1px;
            text-align: center;
        }
    </style>

