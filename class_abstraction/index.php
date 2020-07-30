<?php 
	
	abstract class AbastractClass
	{
		// force extending class to define this method 
		abstract protected function getValue();
		abstract protected function prefixValue($prefix);
		//common method 
		public function printOut() 
		{
			print $this->getValue(). "n";
		}
	}

	class ConcreteClass1 extends AbastractClass
	{
		protected function getValue()
		{
			return "ConcreteClass1";
		}

		public function prefixValue($prefix)
		{
			return "{$prefix}ConcreteClass1";
		}
	}

	class ConcreteClass2 extends AbastractClass
	{
		public function getValue()
		{
			return "ConcreteClass2";
		}

		public function prefixValue($prefix)
		{
			return "{$prefix}ConcreteClass2";
		}
	}

	$class1 = new ConcreteClass1;
	$class1->printOut();
	echo $class1->prefixValue('FOO_') . "\n";

	$class1 = new ConcreteClass2;
	$class1->printOut();
	echo $class1->prefixValue('FOO_') . "\n";
 ?>