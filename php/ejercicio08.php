<?php
    echo "<h2><b>Recogida de datos</b></h2><form method=\"get\" action=" . $_SERVER['PHP_SELF'] . ">
          <label>Nombre usuario:</label><input type=\"text\" name=\"nombre\"><br>
          <label>Telefono:</label><input type=\"text\" name=\"telefono\"><br>
          <input type=\"submit\" value=\"enviar\">
          </form>" ;
    if(isset($_GET) && !empty($_GET)){ 

        echo "<hr><h2><b>Datos recogidos</b></h2><p> Nombre usuario: " . $_GET[nombre] . "</p>";
        echo "<p> Telefono: " . $_GET[telefono] . "</p>";
    }
?>