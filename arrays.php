<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$list = ['a', 'b', 'c'];
$hmap = [
    'a' => 'ei',
    'b' => 'bi',
    'c' => 'ci',
];
array_splice($list, 2, 1);
for ($i = 0; $i < count($list); $i++) {
    echo $list[$i] . "<br>";

}
print_r($list);
print_r($hmap);
echo "<br>";
echo $hmap['a'];
$hmap['d'] = 'dii';
$list[] = 'd';
echo "<br><br>";
echo $hmap['d'] . "<br>" . $list[count($list) - 1];
array_splice($list, 0, 0, ['A',]);
echo "<br>";
array_splice($list, 2, 1);
for ($i = 0; $i < count($list); $i++) {
    echo $list[$i] . " ";

}
?>
</body>
</html>
