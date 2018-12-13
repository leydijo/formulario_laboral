<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />
    <title>Ingreso</title>
</head>
<body>
        <div class= "container ">
                <h2>Export Data to Excel</h2>
                <div class="well-sm col-sm-12">
                <div class="btn-group pull-right">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
                </form>
                </div>
                </div>
                <table id="" class="table table-striped table-bordered">
                <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Ingreso</th>
                <th>Egreso</th>
                </tr>
                <tbody>
                <?php foreach ($developer_records as $developer) { ?>
                <tr>
                <td><?php echo $developer ['nombre']; ?></td>
                <td><?php echo $developer ['apellido']; ?></td>
                <td><?php echo $developer ['ingreso']; ?></td>
                <td><?php echo $developer ['egreso']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
                </table>
        </div>

        </body>
</html>



    <!-- <div class="container">
        <form action="consulta.php" method="POST" id="consulta" name="formConsulta">
                <p>Por favor ingresar nombre del consultor</p>
                <div class="name"><label>Nombre del Consultor<input type="text" name="consultor" placeholder= "NOMBRE" /></label></div>
                <div class="lasname"><label>Apellido Consultor<input type="text" name="consultor" placeholder= "APELLIDO" /></label></div>
                <div><label>Fecha de Registro<input type="date" name="fecha" class="texto" value="" required /></label></div>
                <div><input type="submit" name="consultar" value="Consultar" /></div>
                <div><a href="consulta.php">Generar Reporte en Excel</a></div>

        </form>
        
    </div> -->
    
