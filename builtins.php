<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$string = "Hello world";

echo strlen($string); echo "<br>";

echo strpos($string, 'lo world',); echo "<br>";

$string = str_replace('world', 'miray',$string);
echo $string; echo "<br>";

$string = strtolower($string);
echo $string; echo "<br>";
echo substr($string, 2, -2); echo "<br>";
print_r(explode(' ',$string)) ; echo "<br>"; // print readable

$num = -5.5;
echo abs($num);echo "<br>";
echo round(num: $num,mode:PHP_ROUND_HALF_DOWN);echo "<br>";

$list = ['a','b','c'];

echo is_array($list);echo "<br>";

echo array_pop($list);echo "<br>";

print_r(array_reverse($list));echo "<br>";

print_r(array_merge($list,['c','d']));echo "<br>";

echo date("Y-m-d H:i:s");echo "<br>";
echo time();echo "<br>";

$cur_date = '2024-06-24 18:26:40';
echo '2024-06-24 18:26:40 =>' . strtotime($cur_date);echo "<br>";

?>
</body>
</html>
