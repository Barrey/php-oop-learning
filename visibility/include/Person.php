<?php
class Person {
	public $name;
	public $age;
	public $height;
	protected $weight;
	public $pantSize = 36;

	public function __construct($name, $age, $weight){
		$this->name = $name; 
		$this->age = $age;
		$this->weight = $weight;
	}

	public function drinkCoffe(){
		return $this->name.' is drink coffe';
	}

	public function getWeight(){
		//with this way, you can get the protected properties value;
		return $this->weight;
	}

	protected function getHeight(){
		return $this->height;
	}

	private function getPantSize(){
		return $this->pantSize;
	}

	public function getHeightValue(){
		//with this way, you can get the protected method value;
		return $this->getHeight();
	}

	public function getPantInfo(){
		//with this way, you can get the private method value;
		return $this->getPantSize();
	}
}
?>