<?php
require_once 'Usuario.php';
    class App{

        private $_usuario;

        public function __construct(){
            if (isset($_GET) && !empty($_GET)){
                $this->_usuario = new Usuario($_GET['nombre'], $_GET['telefono']);
            }
        }
        public function mostrar(){
            if (isset($_GET) && !empty($_GET)){
            echo "Nombre: " . $this->_usuario->getNombre();
            echo "<br>Telefono: " . $this->$_usuario->getTelefono();
            }
        }

    }

?>