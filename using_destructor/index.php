<?php 
// class definition

/**
 * summary
 */
class Bear
{
    /**
     * summary
     */

    // define properties

    public $name;
    public $weight;
    public $age;
    public $sex;
    public $colour;

    //constructor
    public function __construct()
    {
        $this->age = 0;
        $this->weight = 100;
        $this->colour = "brown";
    }

    // destructor
    public function __destruct() {
    	echo $this->name. " is dead. He is was ". $this->age. " years old and " . $this->weight. " units heavy . Rest in peace! \n";
    }

    // define methods 
    public function eat($units) {
    	echo $this->name. " is eating " .$units. "units of foods...\n";
    	$this->weight += $units;
    }

    public function run() {
    	echo $this->name. " is runnig ... \n";
    }
    public function kill() {
    	echo $this->name . " is killing prey....\n";
    }
}

// create instance of Bear()

$daddy = new Bear();
$daddy->name = "Daddy Bear";
$daddy->age = 10;
echo "<br/>";
$daddy->eat(2000);
echo "<br/>";
$daddy->run();
echo "<br/>";
$daddy->eat(100);


 ?>