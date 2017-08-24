<?php
class Teacher extends Person{

	//class Person is going to be included in class Teacher
	//because class Teacher extends class Person

	public function destination(){
		return $this->name.' goto school';
	}
}

?>