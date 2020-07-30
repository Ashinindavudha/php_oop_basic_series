<?php 
class MyClass {
	public $public = 'Public';

	protected $protected = 'Protected';

	private $private = 'Private';

	function printHello() {
		echo $this->public;

		echo $this->protected;
		echo $this->private;
	}
}

$obj = new MyClass();

echo $obj->public; // works 
echo "<br/>";
//echo $obj->protected; // Fatal Error
//echo $obj->private // fatal error;

$obj->printHello(); // Shows public, protected and private
echo "<br/>";

/**
 * summary
 */
class MyClass2 extends MyClass
{
    /**
     * summary
     */

    // we can redeclare the public and protected method, but not private
    protected $protected = 'Protected2';

    function printHello(){
    	echo "This is inside printHello()";
    	echo "<br/>";
    	echo $this->public;
    	echo $this->protected;
    	echo $this->private;
    }
    
}

$obj2 = new MyClass2();
echo $obj2->public; //works
echo "<br/>";
echo $obj2->private; // undefined
echo "<br/>";
//echo $obj2->protected; // fatal error
$obj2->printHello(); // show public, protected2, undefined
echo "<br/>";
 ?>