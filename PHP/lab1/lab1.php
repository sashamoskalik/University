<?php 
/*Матрица K(m,m) состоит из нулей и единиц. Найдите в ней номера (ин¬дексы)хотя бы одной строки или хотя бы одного столбца, не содержащих единицы, либо сообщите, что таковых нет.*/
$m = 5;
$array = [];
$flag = true;
$count = 0;
for ($i=0; $i < $m ; $i++)
	for ($j=0; $j < $m ; $j++) { 
	 $array[$i][$j] = rand(0,1);
}
echo "Matrix <br>";
for ($i=0; $i < $m ; $i++){
	for ($j=0; $j < $m ; $j++) { 
		echo $array[$i][$j];
		echo " ";
	}
	echo "<br>";
}
for ($i=0; $i < $m ; $i++) { 
	$count = 0;
	for ($j=0; $j < $m; $j++) { 
		if ($array[$i][$j] != 1) {
			$count++;
		}
	}
	if ($count == $m) {
		echo "Line = $i <br>";
	}
}

for ($j=0; $j < $m ; $j++) { 
	$count = 0;
	for ($i=0; $i < $m; $i++) { 
		if ($array[$i][$j] != 1) {
			$count++;
		}
	}
	if ($count == $m) {
		echo "Column = $j <br>";
	}
}
?>