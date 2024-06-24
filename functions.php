<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function say_hello(string $name='World'){
    return "Hello $name!";
}
echo say_hello('Dani');echo '<br>';
echo say_hello();echo '<br>';
//echo say_hello(1);echo '<br>'; // declare(strict_types=1); !

$test = 'TEST';
function scopes(){
//    global $test;
    return $GLOBALS['test'];
}
echo scopes(); echo '<br>';

function f_static(){
    static $var = 0;
    $var++;
    return $var;
}
echo f_static().' ';
echo f_static(); echo '<br>';

define('PI', 3.14); // cant change it
echo PI;
?>
</body>
</html>
