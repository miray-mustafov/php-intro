<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
for($i = 0; $i < 10; $i++){
    echo $i.'<br>';
}
echo '<br>';

$num = 100;
do{
    echo $num++ . '<br>';
}while($num < 102);

$fruits = ['Apple'=>'red', 'banana'=>'yellow'];
foreach($fruits as $key => $value){
    echo $key . ' ' . $value . '<br>';
}
?>
</body>
</html>
