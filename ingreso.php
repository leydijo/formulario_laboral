<?php 
include('inicio.php');
$alumnos="SELECT * FROM actividades order by id";
$resAlumnos=$conexion->query($alumnos);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Descargar informe Laboral</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="page-header text-left">
    <h1>Exportar informe </h1>
  </div>
  <form method="post" class="form" action="consulta.php">
<input type="date" name="fecha1">
<input type="date" name="fecha2">
<input type="text" name="cliente">
<input type="submit" name="generar_reporte">
</form>
  <div class="row">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>CLIENTE</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      while($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
      {
        echo'<tr>
						 <td>'.$registroAlumnos['id'].'</td>
						 <td>'.$registroAlumnos['nombre'].'</td>
						 <td>'.$registroAlumnos['apellido'].'</td>
						 <td>'.$registroAlumnos['cliente'].'</td>
						 </tr>';
      }
      ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>

