<?php
echo "<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
<title>my_array_unique</title>
</head>
<body>";

$input = array(8,2,4,8,"a" => "dfsf", 8, "red",4, "b" => "green",8, true,4, "blue2", true, "red1",6,8);

function my_array_unique($array){
$result = false;
if ( is_array($array) ){
	$result = array();
	while ( count($array) ){
		$same = array_keys($array, current($array), true);
		sort($same);
		$result[$same[0]] = $array[$same[0]];
		for ($i = 0; $i <= (count($same)-1); $i++){
			unset($array[$same[$i]]);
		}
	}
}
	return $result;
}

if ( my_array_unique($input) ) {
	$my = my_array_unique($input);
}else die("Отсутствуют или некоректные входные данные!");

$standart = array_unique($input);

echo "<pre> Исходный массив<br>";
	print_r($input);
echo"<br>Стандартная функция<br>";
	print_r($standart);
echo"<br>Моя функция<br>";
	print_r($my);

echo "</body>
</html>";
?>
