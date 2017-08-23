<?php
class Person{
	public $name;
	public $age;
}

$person = new Person;
$person->name = 'Budi';
$person->age = 26;

echo $person->name;
echo '<br/>';
echo $person->age;
?>