<?php 

class class1 {
	public $y=2;
	function __construct() {
		echo "<br>construct1<br>";
		$this->x=1;                       // we are defining this variable here
	}

	function fun(){
		echo "<br>fun1<br>";
	}
}

class class2 extends class1 {
	function __construct() {
		echo "<br>construct2<br>";
		//parent::fun();
		
		//parent::__construct();
	}

	function fun(){
		echo "<br>fun2<br>";
		//parent::__construct();
	}
}

$ob1 = new class2();
echo $ob1->y;
$ob1->fun();
?>