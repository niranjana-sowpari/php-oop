<?php 

trait class1 {
	function fun1(){
		echo "fun1";
	}
}

class class2 {
	use class1;
	function fun2(){
		echo "fun2";
	}
}

class class3 extends class2 {

	function fun3(){
		echo "fun3";
	}
}

class class4 {
	function fun4(){
		echo "fun4";
	}
}

$ob = new class3();
$ob->fun1();