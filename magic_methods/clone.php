<?php 

	class Car
	{
		private $gas = 0;

		private $color = "red";
		function addGas($amount){
			$this->gas = $this->gas + $amount;
			echo "$amount gallons added to gas tank";
		}

		function __clone() 
		{
			$this->gas = 0;
		}
	}

	$firstCar = new Car;
	$firstCar->addGas(12);
	$secondCar = clone $firstCar;
	$secondCar->addGas(17);


	//output
	//12 gallons added to gas tank17 gallons added to gas tank

 ?>