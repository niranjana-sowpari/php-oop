<?php

trait trait1 {
	function fun1(){
		echo "t1:fun1";
}
}

trait trait2 {
	function fun1(){
		echo "t2:fun1";
}
}

class class1 {
	use trait1, trait2{
	trait1::fun1 insteadof trait2;
	trait2::fun1 as fun2;                 //alias
  }
}

$ob = new class1();
$ob->fun1();
echo "<br>";
$ob->fun2();