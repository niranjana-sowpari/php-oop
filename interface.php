<?php 

interface inter1 {
    function fun1();
}

interface inter2 {
    function fun2();
}

class class2 {
	function fun3(){
		echo "class 2";
	}
}

class class3 {
	function fun4(){
		echo "class 3";
	}
}


class class1 extends class3 implements inter1, inter2 {
	function fun1(){
		echo "interface 1";
	}

	function fun2(){
		echo "interface 2";
	}
}

$ob = new class1();
echo "<br>";
$ob->fun1();
echo "<br>";
$ob->fun2();
echo "<br>";
$ob->fun4();

echo "<br>";
echo "bts";