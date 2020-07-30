<?php 
/**
 * summary
 */
class Bear 
{
    /**
     * summary
     */

    //define properties
    public $name;
    public $weight;
    public $age;
    public $sex;
    public $colour;

    // define methods
    public function eat() {
    	echo $this->name. " is eating.... \n";
    }

    public function run() {
    	echo $this->name. " is running....\n";
    }

    public function kill() {
    	echo $this->name. " is killing prey.. ...\n";
    }

    public function sleep() {
    	echo $this->name. " is sleeping...\n";
    }
    
}
 ?>

 <?php 
// first bear 
 $daddy = new Bear;
 // give him a name
 $daddy->name = "Daddy Bear";

 // how old is he

 $daddy->age = 8;
 //what sex is he
 $daddy->sex = "male";
 //what colour is his coat
 $daddy->colour = "black";
 // how much does he weigh
 $daddy->weight = 300;
 //give daddy a wife 
 $mommy = new Bear;
 $mommy->name = "Mommy Bear";
 $mommy->age = 7;
 $mommy->sex = "female";
 $mommy->colour = "black";
 $mommy->weight = "320";
 // and a baby to complete the family

 $baby = new Bear;
 $baby->name = "Baby Bear";
 $baby->age = 1;
 $baby->sex = "male";
 $baby->colour = "black";
 $baby->weight = 180;

 print("<h2>PHP Class and object example 1</h1>");
 //a nice evening in the bear family 
 // daddy kills prey and brings it home
 $daddy->kill();
 echo "<br/>";
 //mommy eats it 
 $mommy->eat();
 echo "<br/>";
 // and so does baby
 $baby->eat();
 echo "<br/>";
 //mommy sleeps
 $mommy->sleep();
 echo "<br/>";
 // and so does daddy
 $daddy->sleep();
 echo "<br/>";
 //baby eats some more
 $baby->eat();
 echo "<br/>";
  ?>