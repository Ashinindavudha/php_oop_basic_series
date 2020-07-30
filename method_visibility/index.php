<?php 
/*
class methods must be defined with public, private, or protected. methods without any declaration are defined as public.
*/

//declare a public controuctor 
// public function __construct(){

// }

//declare a public method
 // public function MyPublic() {

 // }

 // // declare a protected method 
 // protected function MyProtected() {

 // }

 // //declare a private method
 // private function MyPrivate() {

 // }

 // this is public 
 function Foo() {
 	$this->MyPublic();
 	$this->MyProtected();
 	$this->MyPrivate();
 }

 $myclass = new MyClass;
 $myclass->MyPublic(); // works
 //$myclass->MyProtected(); // fatal error
 //$myclass->MyPrivate(); // fatal error
 $myclass->Foo(); // Public, Protected, and Private Work

 /**
  * Define MyClass2
  */
 class MyClass2 extends MyClass
 {
     // this is public 
 	function Foo2() {
 		$this->MyPublic();
 		$this->MyProtected();
 		//$this->MyPrivate(); //fatal error
 	}
     
 }

 $myclass2 = new MyClass2;
 $myclass2->MyPublic(); // works
 $myclass2->Foo2(); // public and protected work, not private;

 class Bar {
 	public function test() {
 		$this->testPrivate();
 		$this->testPublic();
 	}

 	public function testPublic() {
 		echo "Bar::testPublic\n";
 	}

 	private function testPrivate() {
 		echo "Bar::testPrivate\n";
 		echo '<br/>';
 	}
 }

 /**
  * summary
  */
 class Foo extends Bar
 {
     public function testPublic() {
     	echo "Foo::testPublic\n";
     }

     public function testPrivate() {
     	echo "Foo::testPrivate\n";
     }
 }

 $myFoo = new Foo();
 $myFoo->test(); // Bar::testPrivate // Foo::testPublic
 ?>