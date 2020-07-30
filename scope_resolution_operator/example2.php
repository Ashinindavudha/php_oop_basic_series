<?php 
 	//example 1 ; from outside the class definition

class MyClass {
	const CONST_VALUE = 'this is a constant value';

}

echo MyClass::CONST_VALUE;

 ?>

 <?php 

 class OtherClass extends MyClass
 	{
 	    
 	    public static $my_static = 'static var';

 	    public static function doubleColon() {
 	    	echo parent::CONST_VALUE. "\n";

 	    	echo self::$my_static . "\n";
 	    }
 	    
 	}
 	OtherClass::doubleColon();

  ?>