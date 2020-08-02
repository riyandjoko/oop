<?php 



class Ape extends Animal
{
	
	
	public function __construct($name,$legs=2,$cold_blooded="false"){
		$this->name = $name;
		$this->legs = $legs;
		$this->cold_blooded = $cold_blooded;
		
	}

	public function yell(){
		$suara = "Auoooo";

		return $suara;
	}
}



 ?>