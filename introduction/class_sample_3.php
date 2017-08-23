<?php
class Person {
	public $name;
	public $age;

	function __construct($name, $age){
		$this->name = $name; 
		$this->age = $age;
	}
}

$person = new Person('Budi', 26);
echo $person->name;
echo '<br/>';
echo $person->age;
?>