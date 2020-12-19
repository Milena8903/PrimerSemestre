<?php 

 // clse que contiene variables de conexion


class Conexion{

	//atributos
	private $db = 'oci:dbname=xe';
	//private $db = 'mysql:host=localhost;dbname=proyecto';
	private $user = 'IGLESIACMB';
	private $pass= '1018426';

	public function Conectar(){
		$base = new PDO($this->db, $this->user,$this->pass);
		return $base;
	}

}







?>