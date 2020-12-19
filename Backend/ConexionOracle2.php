<?php
// clse que contiene variables de conexión

class Conexion{
	private $db = 'oci:dbname=xe';
	
	private $user = 'Mario';
	private $pass = '45998818';
	
	public function Conectar(){
		$base = new PDO($this-> db, $this-> user, $this-> pass);
		return $base;
	}
}
?>