<?php 

class class1 { 

	static $num=1;

	static function fun1(){

		echo self::$num."static function it is";
	}

}

$ob = new class1();

class1::$num++;
echo "<br>".class1::$num."<br>";
echo $ob->fun1();

echo "<br>"."bts";