<?php 
	
	class Example
	{
		//hold an instance of the class
		private static $instance;

		//A private constructor; prevents direct creation of object 
		private function __construct()
		{
			echo 'I am Constructed';
		}

		// the singleton method

		public static function singleton()
		{
			if (!isset(self::$instance)) {
				$c = __CLASS__;
				self::$instance = new $c;
			}

			return self::$instance;
		}

		//Example method

		public function bark()
		{
			echo 'Woof';
		}

		//prevent users to clone the instance
		public function __clone()
		{
			trigger_error('Clone is not allowed.', E_USER_ERROR);
		}
	}
// THIS ALLOW A SINGLE INSTANCE OF THE EXAMPLE CLASS TO BE RETRIEVED. AS FOLLOWING:


 ?>

 <?php 

 	//this would fail because the sonstructor is private
 //$test = new Example;

 // this will always retrieve a single instance of the class

 // this will issue an E_USER_ERROR.
 $test_clone = clone $test;

  ?>