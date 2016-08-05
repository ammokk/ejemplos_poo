<?php

//Requerimiento:

//Vamos a realizar una aplicacion tipo loteria
//donde le indicaremos un numero aleatorio y la
//cantidad de intentos, esta debe mostrar un mensaje si
//gano o no el concursante

class Loteria{
#Atributos
	public $numero; //numero aleatorio
	public $intentos;
	public $resultado=false;
	
#Metodos
	public function __construct($numero, $intentos){
		$this->numero=$numero;
		$this->intentos=$intentos;
	}
	
	public function sortear(){
		$minimo=$this->numero/2;
		$maximo=$this->numero*2;
		
		for($i=0;$i<$this->intentos; $i++){
			$inten=rand($minimo,$maximo);
			$this->intentos($inten);
		}
	}
	
	public function intentos($inten){
		if($inten==$this->numero){
			echo "<b> $inten == ".$this->numero."</b><br>";
			$this->resultado=true;
		}else{
			echo " $inten != ".$this->numero."<br>";
		}
	}
	
	public function __destruct(){
		if($this->resultado){
			echo "Felicidades has acertado en ".$this->intentos." intentos";
		}else{
			echo "Lastima has perdido en ".$this->intentos." intentos";
		}
	}
}

$loteria=new Loteria(10,10);
$loteria->sortear()


?>