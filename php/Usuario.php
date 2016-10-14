<?php
    class Usuario {
        private $_nombre;
        private $_telefono;

        public function __construct($nombre, $telefono){
            $this->_nombre = $nombre;
            $this->_telefono = $telefono;
        }

    }

?>