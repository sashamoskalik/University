<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lab3</title>
</head>
<body>
<p>В имеющемся словаре найдите пары слов (анаграммы), при прочтении каждого из которых в обратном направлении образуется другое слово пары.</p>
<?php
$f = fopen("text.txt", "r");
while (!feof($f)) $search.=fgets($f, 1024);
$words = explode(" ", $search);
fclose($f);
echo $search;
echo "<br>";
for ($i=0; $i < count($words) ; $i++) { 
if (eregi(strtolower($words[$i]), strtolower($search)) && eregi(strtolower(strrev($words[$i])),strtolower($search))) {
	echo $words[$i]." and ".strrev($words[$i]);
	echo "<br>";
}
}
  ?>
</body>
</html>
