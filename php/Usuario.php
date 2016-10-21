<?php
/*Modifica el fichero anterior usando POO. Crea una clase principal llamada App. Crea otra clase Usuario con los atributos privados nombre y teléfono y un método constructor. El constructor puede llevar a cabo toda la tarea. */

    class Usuario {
        private $_nombre;
        private $_telefono;

        public function __construct($nombre, $telefono){
            $this->_nombre = $nombre;
            $this->_telefono = $telefono;
        }
    /**
     * Gets the value of _nombre.
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->_nombre;
    }

    /**
     * Sets the value of _nombre.
     *
     * @param mixed $_nombre the nombre
     *
     * @return self
     */
    private function _setNombre($nombre)
    {
        $this->_nombre = $nombre;

        return $this;
    }

    /**
     * Gets the value of _telefono.
     *
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->_telefono;
    }

    /**
     * Sets the value of _telefono.
     *
     * @param mixed $_telefono the telefono
     *
     * @return self
     */
    private function _setTelefono($telefono)
    {
        $this->_telefono = $telefono;

        return $this;
    }
}

?>