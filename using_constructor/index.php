<?php 
class Bear {
	//define properties 
	public $name;
	public $weight;
	public $colour;

	
	public function __construct() {
		$this->age = 0;
		$this->weight = 100;
		$this->colour = "brown";
	}
}


 ?>

 <?php 
 	//create instance 
 $baby = new Bear;
 $baby->name = "Baby Bear";
 echo $baby->name. " is". $baby->colour. "and weights". $baby->weight. "units birth"; 
  ?>