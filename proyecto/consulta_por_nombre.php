<?php
 include('menu.php');
 ?>
  <title>Insertar.html</title>
</head>
<body>
  <div>
    <h1>Inserte un Nombre o Apellido</h1>
    <br>
    <form method="POST" action="res_consulta_por_nombre.php">
      Nombre<br>
      <input type="TEXT" name="f_nombre"><br>
      Apellido Paterno<br>
      <input type="TEXT" name="f_Apellido"><br>
      Apellido Materno<br>
      <input type="TEXT" name="f_Apellido"><br>
      <input type="SUBMIT" value="Buscar">
 
    </form>
  </div>
</body>
</html>