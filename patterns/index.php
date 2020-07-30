<?php 
	
	//example / parameterized factory method

/*
	factory 
	the factory pattern allows for the instantiation of object at runtime. it is called a factory pattern since it is responsible for "manufacturing" an object. a parameterized factory receives the name of the class to instantiate as argument.
*/
	class Example
	{
		//The parameterized factory method
		public static function factory($type)
		{
			if (include_once 'Drivers/' . $type . '.php') {
				
				$classname = 'Driver_'. $type;
				return new $classname;
			}else {
				throw new Exception('Driver not found');
			}
		}
	}

/*
defining this method in a class allows drives to be loaded on the fly. if the example class was a database abstraction class, loading a MYSQL and SQLite driver.

*/

 ?>

 <?php 
 /*
defining this method in a class allows drives to be loaded on the fly. if the example class was a database abstraction class, loading a MYSQL and SQLite driver could be done as follows:

*/
// load a mysql driver

	$mysql = Example::factory('MySQL');

	// load a SQLite Driver

	$sqlite = Example::factory('SQLite');

  ?>

