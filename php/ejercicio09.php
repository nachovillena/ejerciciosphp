<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title></title>
    </head>
    <body >
        <h2><b>Recogida de datos</b></h2>
         <form method="get" action= "App.php">
            <label>Nombre usuario:</label> <input type="text" name="nombre"><br>
            <label>Telefono:</label> <input type="text" name="telefono"><br>
            <input type="submit" value="enviar">
         </form>
    </body>
</html>

<?php
    require_once 'App.php';
    $app = new App();
    $app->mostrar();
?>