


<!DOCTYPE html>
<html>
<head>
	<title>hola</title>
</head>
<body>
	<?php 

class oop {
	public $x = 1;

	function __construct(){

		echo "<br>contructor<br>";

	}

	function fun1(){

		echo "<br>function 1 it is<br>";
	}

	function __destruct(){

		echo "<br>destructor<br>";

	}
}

$ob1 = new oop();
echo "<br>you know i am just a flight away<br>";
$ob1->fun1();
echo "<br>if you wanted we could take a private planeeeeee!!!!<br>"




?>
	<h1>this is literally after the php code</h1>
</body>
</html>