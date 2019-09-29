<?php
echo "<pre>" . var_export($_GET, true) . "</pre>";

if(isset($_GET['name'])){
	echo "<br>Hello, " . $_GET['name'] . "<br>";
}

if(isset($_GET['number'])){
	$number = $_GET['number'];
	echo "<br>" . $number . " should be a number...";
	echo "<br>but it might not be<br>";
}

$number1 = $_GET['number1'];
if (is_int($number1)){
	echo "$number1 is Integer<br>" ;
	}
else {
	echo "$number1 is not an Integer<br>" ;
	}

$number2 = $_GET['number2'];
if (is_int($number2)){
        echo "$number2 is Integer<br>" ;
        }
else {
      	echo "$number2 is not an Integer<br>" ;
        }

echo '<br>' . 'Concatenate: ' . $_GET['number1'] . ' ' . $_GET['number2'] . '<br>';

echo '<br>' . 'Try passing two parameters with the same name but different values, note and
	record the results: ' . '<br>';

/*
$param = hello world;
$param = world hello;
echo $param;
*/
echo 'The result: The page stopped working.' . '<br>';

echo 'Try passing a parameter with a value containg various special characters, note
	and record the results: ' . '<br>';
/*
echo '$/&|`\';
*/
echo 'The result: The page once again stopped working.';
?>
