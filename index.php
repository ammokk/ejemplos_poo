<?php

class Persona{
	//Atributos
	public $nombre='Pedro';
	
	//Metodos
	public function hablar($msj){
		echo $msj;
	}
}

$persona=new Persona();
//echo $persona->nombre;
$persona->hablar("HOLAAA")

?>