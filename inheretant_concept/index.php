<?php 
//class definition
class Bear {
	//define properties 
	public $name;
	public $weight;
	public $age;
	public $sex;
	public $colour;


	public function __construct() {
		$this->age = 0;
		$this->weight = 100;
	}

	// define methods
	public function eat($units) {
		echo $this->name. " is eating " . $units . " units of food...\n";
		$this->weight += $units;
	}

	public function run() {
		echo $this->name. " is running...\n";
	}

	public function kill() {
		echo $this->name. " is killing prey ... \n";
	}

	public function sleep() {
		echo $this->name. " is sleeping ... \n";
	}
}

// extended class definition

	/**
	 * summary
	 */
	class PolarBear extends Bear
	{
	    /**
	     * summary
	     */

	    // constructor
	    public function __construct()
	    {
	        parent::__construct();
	        $this->colour = "white";
	        $this->weight = 600;
	    }

	    // define menthods

	    public function swim() {
	    	echo $this->name. " is swimming....\n";
	    }
	}

 ?>

 <?php 

 	// create instance of Bear()

 $tom = new Bear;

 $tom->name = "Tommy Bear";

 // create instance of PolarBear()
 $bob = new PolarBear;
 $bob->name = "Bobby Bear";

 // $bob can use all the methods of Bear() and PolarBear()

 $bob->run();
 $bob->kill();
 $bob->swim();

 //$tom can use all the the methods of Bear() but not PolarBear()

 $tom->run();
 $tom->kill();
 $tom->swim();

  ?>