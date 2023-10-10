<?php

$username="sistemas";
$password="12345";
$host="127.0.0.1";
$database="personal";
//$mysqli = new mysqli($host, $username, $password, $database);

 $conn=@mysqli_connect($host, $username, $password, $database) or die ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
	
	
	# Comprobar si existe registro
	
	$query = "select * from jubilados";
	
	$result = mysqli_query($conn,$query);
	
	if($result){
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
		</tr>";
		}
		echo "</tbody>
		</table>";
	}

      mysqli_close($conn);

?>
