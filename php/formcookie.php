<?php
    $_nombre = "";
    $_tel = "";
    foreach ($_COOKIE as $nombre => $valor) {
        $_nombre = $nombre;
        $_tel = $valor;
    }
    echo " <html>
    <head>
        <title>TODO supply a title</title>
        <meta charset='UTF-8'
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
        <div>Alta de usuario
            <form action='cookie.php' method='post'>
                <label>Nombre</label>
                <input type='text' name='nombre' value=". $_nombre . "><br>

                <label>Teléfono</label>
                <input type='text' name='telefono' value=". $_tel . "><br>

                <input type='checkbox' value='ok' name='recordar'> Recordar</input><br>
                <input type='submit' value='Enviar'>
                
            </form>
            <hr>
            <form action='ResetSesion' method='post'>
                <input type='submit' value='Borrar lista'>
            </form>
        </div>
    </body>
</html>" ;
?>