<?php 
 // class definition
class Bear {
	//define properties
	public $name;
	public $age;
	public $weight;
	private $_lastUnitsConsumed;

	// constructor 
	public function __construct() {
		$this->age = 0;
		$this->weight = 100;
		$this->_lastUnitsConsumed = 0;

	}

	// definition methods

	public function eat($units) {
		echo $this->name. " is eating". $units. "units of food...\n";
		$this->weight += $units;
		$this->_lastUnitsConsumed = $units;
	}

	public function getLastMeal() {
		echo "Unit consumed in last meal were" . $this->_lastUnitsConsumed ."n";
	}
}


 ?>

 <?php 
 	$bob = new Bear;
 	$bob->name = "Bobby Bear";
 	$bob->eat(200);
 	$bob->eat(300);
 	echo $bob->getLastMeal();
 	// the next line will generate a fatal error
 	$bob->_lastUnitsConsumed = 1000;

  ?>