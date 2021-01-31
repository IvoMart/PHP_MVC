<!DOCTYPE html>
<html lang="es">
  <head>
    <title>PLantilla 1 - Inicio PHP</title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- CUSTOM CSSS -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <?php
  include "modulos-vista/navbar.php";
  include "modulos-vista/menu.php";
  ?>
  <?php
  // Check wether the root is inicio/perfil/productos
  echo "<strong><em>".$_GET["ruta"]."</em></strong><br><br>";

  if (isset($_GET["ruta"])){
    if ($_GET["ruta"] == "inicio"||
        $_GET["ruta"] == "perfil"||
        $_GET["ruta"] == "productos"){
          include "modulos-vista/".$_GET["ruta"].".php";
        /**De esta manera logramos incorporar sobre esta plantilla el contenido
         * correspondiente a la petición del usuario.
         */
    }
  }
  
  include "modulos-vista/footer.php";
  ?>

  <!-- Bootstrap script bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>