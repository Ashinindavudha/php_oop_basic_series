<?php 
		//class definition 
final class Bear {
	//definition properties
	//define methods

}

// extended class definition 
// this will fail because Bear() cannot be extended 

class PolarBear extends Bear {
	// define methods
}

// create instance of PolarBear()
// this will fail because Bear() could not be extended 
$bob = new PolarBear;
$bob->name = "Bobby Bear";
echo $bob->weight;

 ?>