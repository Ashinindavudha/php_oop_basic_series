<?php 
	
	// a real time example for abstract class
	
	abstract class person {
		abstract protected function write_info();
		public $LastName;
		public $FirstName;
		public $BirthDate;


		public function get_Age($today=NULL)
		{
			//age computation function
		}
	}

		final class employee extends person
		{
			public $EmployeeNumber;
			public $DateHired;

			public function write_info()
			{
				echo "Writing ". $this->LastName . " 's info to emloyee dbase table";

				//Add unique mandatory checking unique to employee only 
				// actual sql here
			}
		}

		final class student extends person{
			public $StudentNumber;
			public $CourseName;

			public function write_info()
			{
				echo "Writing ". $this->LastName . " 's info to Student dbase table";

				//Add unique mandatory checking unique to Student only 
				// actual sql here
			}
		}

		$personA = new employee;
		$personB = new student;

		$personA->FirstName = "Ashin";
		$personA->LastName = "Indavudha";

		$personB->FirstName = "Ashin";
		$personB->LastName = "jhaneyya";

		$personA->write_info();
	

 ?>