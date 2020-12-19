<?php 

 // clse que contiene variables de conexion


class Conexion{

	//atributos
	private $db = 'oci:dbname=xe';
	//private $db = 'mysql:host=localhost;dbname=proyecto';
	private $user = 'Mario';
	private $pass= '45998818';

	public function Conectar(){
		$base = new PDO($this->db, $this->user,$this->pass);
		return $base;
	}

}







?>