<?php 
		class DOG {
			public $name;
			public $sex;
			public $colour;
			public $weight;


			public function eat() {
				echo $this->name. " with " . $this->colour. " Colour is eating ... \n";
			}

			public function weightt() {
				echo $this->name. " is " . $this->weight. "kolo Gram. ";
			}
		}

 ?>

 <?php 
 		$daddy = new DOG;
 		$daddy->name = " Daddy Dog";
 		$daddy->weight = 120;
 		$daddy->sex = "Male";
 		$daddy->colour = "Blue";

 		print("<br/>");
 		$class_name = get_class($daddy);
 		print_r(get_class_vars($class_name));
 		print("<br/>");
 		print_r(get_object_vars($daddy));

  ?>