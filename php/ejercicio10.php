<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title></title>
    </head>
    <body >
        <h2><b>Recogida de datos</b></h2>
         <form method="get" action= "ejercicio10.php">
            <label>Nombre usuario:</label> <input type="text" name="nombre"><br>
            <label>Telefono:</label> <input type="text" name="telefono"><br>
            <input type="submit" value="enviar">
         </form>
    </body>
</html>

<?php
/*HACIENDO USO DE INPUTS OCULTOS Vamos a crear una lista de usuarios partiendo del ejercicio anterior. Se trata de usar inputs ocultos con los valoress ya enviados previamente. Ayúdate de las funciones explode e implode.*/
require_once 'Usuario.php';
        $datos[] = "<input>" . $_GET[nombre] . " " . $_GET[telefono] . "</input>";
        foreach($datos as $elemento){
            echo $elemento . "<br>";
        }
        echo "<hr><h2><b>Datos recogidos</b></h2><p> Nombre usuario: " . $_GET[nombre] . "</p>";
        echo "<p> Telefono: " . $_GET[telefono] . "</p>";

    
?>