<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <?php
  require_once "controlador/controlador.plantillas.php" ;
  $inicio = new ControladorPlantilla();
  $inicio->ctrlPlantilla();
  ?>
  </body>
</html>