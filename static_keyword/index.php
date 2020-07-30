<?php 
	

	// Note:: Static properties cannot be accessed through the object using the arrow operator ->.
class Hello
{
	public static $my_static = 'testing_hello';
	public function staticValue() {
		return self::$my_static;
	}
}

/**
 * summary
 */
class Bar extends Hello
{
    public function testing_helloStatic() {
    	return parent::$my_static;
    }
}

print Hello::$my_static. "n";

$testing_hello = new Hello();
print $testing_hello->staticValue(). "\n";

print $testing_hello->my_static . "n"; // undefined "property" my_static

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->testing_helloStatic() . "\n";

 ?>