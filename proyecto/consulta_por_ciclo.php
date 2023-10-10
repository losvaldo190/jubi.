<?php
 include('menu.php');
 ?>
  <title>consulta.html</title>
  <style>
    /* Estilos para el botón de regresar al menú */
    .regresar-btn {
      background-color: #7e8083;
      color: #fff;
      padding: 1px 1px;
      text-decoration: none;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    /* Estilo cuando se coloca el cursor sobre el botón */
    .regresar-btn:hover {
      background-color: #7b8081;
    }
  </style>
</head>
<body>
  <div>
    <h1>consulta por año de jubilacion</h1>
    <br>
    <form method="POST" action="res_consulta_por_ciclo.php">
    Jubilados de<br>
    <input type="text" name="periodo" id="periodo" placeholder="Ej. Ciclo2023">
    <input type="submit" value="Consultar">
    
      
   
    </form>
  </div>
</body>
</html>
