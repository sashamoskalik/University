<?php 
/*Напишите функцию вычисления чисел Фибоначчи*/
$array = [];
$n = rand(0,10);
echo "Numbers = $n <br>";
function fibonachi($n){
for ($i=1; $i <= $n ; $i++) { 
	$array[1] = 1;
	$array[$i] = $array[$i-1] + $array[$i-2];
}
for ($i=1; $i <= $n ; $i++) { 
	echo $array[$i];
	echo "<br>";
}
}
echo "Fibonachi: <br>";
fibonachi($n);
 ?>
