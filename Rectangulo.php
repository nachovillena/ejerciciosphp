<?php
/*
Crea una clase Rectangulo con dos atributos. base y altura. Debe incluir los métodos:
	-	constructor
	-	perimetro
	-	superficie
	-	añade también los getters y setters.

En el fichero ejercicio7 debes crear un ejemplar de la clase anterior y usar los métodos disponibles. La variedad de pruebas


*/

class Rectangulo
{
	private $_base;
	private $_altura;

	public function __construct($base, $altura){
		$this->_base = $base;
		$this->_altura = $altura;
	}
	public function perimetro(){
        return (($this->_base + $this->_altura) * 2);
	}
    public function superficie(){
        return ($this->_base * $this->_altura);
    }
    public function setBase($base){
        $this->_base = $base;
    }
    public function setAltura($altura){
        $this->_altura = $altura;
    }
    public function getBase(){
       return $this->_base;
    }
    public function getAltura(){
       return $this->_altura;
    }
}

?>