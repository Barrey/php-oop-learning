<?php
include "include/Person.php";
include "include/Teacher.php";

$teacher = new Teacher('Budi', 26);
echo $teacher->drinkCoffe();
echo '<br/>';
echo $teacher->destination();
echo '<hr/>';

$person = new Person('Jamal', 25);
echo $person->drinkCoffe();
echo '<br/>';
//if you uncomment code below, you'll get error in browser. because class Person doesn't have "destination" method
//echo $person->destination();
?>