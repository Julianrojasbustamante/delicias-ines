<?php

class Conexion{
	// public function conectar(){
	// 	$conexionDb = new PDO("mysql:host=localhost;dbname=u859096402_fenix","u859096402_fenixdevelopin","Fenixdeveloping2020",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	// 	return $conexionDb;
	// }

	public function conectar(){
		$conexionDb = new PDO("mysql:host=localhost;dbname=delicias-ines","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		return $conexionDb;
	}
}
