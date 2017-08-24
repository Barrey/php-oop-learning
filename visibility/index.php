<?php
include 'include/Person.php';
include 'include/Teacher.php';

$person = new Person('Budi', 26, 70);
$person->height = 175;

//you can't inject propertie's value since it's visibility is protected
//$person->weight = 70; //this will cause error

echo $person->height;
echo '<br/>';

//this will cause error
//echo $person->weight;

echo $person->getWeight();
echo '<br/>';
echo $person->getHeightValue();
echo '<br/>';
echo $person->getPantInfo();

//this will cause error
//echo $person->getPantSize();
?>