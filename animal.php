<?php 


class Animal{

	protected $name, $legs, $cold_blooded;


	public function __construct($name,$legs=2,$cold_blooded="false"){
		$this->name = $name;
		$this->legs = $legs;
		$this->cold_blooded = $cold_blooded;
		
	}

	public function getName(){
		return $this->name;
	}

	public function getLegs(){
		return $this->legs;
	}

	public function getCold_Blooded(){
		return $this->cold_blooded;
	}
}






 ?>