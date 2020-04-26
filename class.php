<?php
	class Student
	{
		private $name;
		private $age;
		//overloading of constructors in not allowed in php
		// public function __construct()
		// {
		// 	$this->name="go";
		// 	$this->age=0;
		// }
		public function __construct($a,$b)
		{	
			$this->name=$a;
			$this->age=$b;
		}
		public function display()
		{
			echo "Your name is ".$this->name.'<br/>';
			echo "\nYour age is ".$this->age.'<br/>';
		}
	}

	class Student2 extends Student
	{
		private $std;
		public function __construct($a,$b,$c)
		{	
			$this->name=$a;
			$this->age=$b;
			$this->std=$c;
		}
		//function display has been overridden in derived class
		public function display()
		{
			echo "Your name is ".$this->name.'<br/>';
			echo "\nYour age is ".$this->age.'<br/>';
			echo "\nYour std is ".$this->std.'<br/>';
		}
	}
	echo "Lets begin<br/>";
	$s1=new Student('Satvik Singh',20);
	$s2=new Student('Rajat Singh',16);
	$s1->display();
	$s2->display();

	$ds1=new Student2('Yagyam',20,'Btech 2nd year');
	$ds1->display();
?>