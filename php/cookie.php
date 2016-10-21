<?php
    $recordar = $_POST['recordar'];
    if ($recordar == "ok"){
    setcookie($_POST['nombre'], $_POST['telefono'], time() + 60);
    }
    echo "<ul>";
        foreach ($_COOKIE as $nombre => $valor) {
            echo "<li> Cookie $nombre: $valor</li>";
        }
    echo "</ul>";
    echo "<a href='formcookie.php'> volver </a>";
?>