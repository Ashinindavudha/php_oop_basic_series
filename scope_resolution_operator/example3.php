<?php 
	// calling a parent's method

	class MyClass 
	{
		protected function myFunc() {
			echo 'MyClass::myFunc() \n';
		}
	}

	/**
	 * summary
	 */
	class OtherClass extends MyClass
	{
	    //override parent's definition
	    public function myFunc()
	    {
	    	//but still call the parent function
	    	parent::myFunc();

	    	echo 'OtherClass::myFunc() \n';
	    }
	}

	$class = new OtherClass();
	$class->myFunc();
 ?>