<?php 

class class1 {
	private $x=1 ;

	function __construct(){
		echo "<br>construct 1<br>";
	}

	function fun(){
		return $this->x;
	}
}

class class2 extends class1 {

	
}

$ob = new class2();
echo "<br>".$ob->fun();

//private
//protected
//public