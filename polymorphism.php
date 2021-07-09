<?php 


interface inter1 {
	function fun1();
}

class class1 implements inter1 {
	function fun1(){
		echo "function1";
	}
}

class class2 implements inter1 {
	function fun1(){
		echo "function2";
	}
}

$ob1 = new class1();
$ob1->fun1();

echo "<br><br>";

$ob2 = new class2();
$ob2->fun1();

