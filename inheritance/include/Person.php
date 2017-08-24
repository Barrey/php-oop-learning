<?php
class Person {
	public $name;
	public $age;

	public function __construct($name, $age){
		$this->name = $name; 
		$this->age = $age;
	}

	public function drinkCoffe(){
		return $this->name.' is drink coffe';
	}
}
?>