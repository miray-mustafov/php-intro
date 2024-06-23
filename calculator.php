<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <input required type="number" name="num01" placeholder="num 1">
    <br>
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <br>
    <input required type="number" name="num02" placeholder="num 2">
    <br>
    <button>act</button>
    <br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // sanitize and grab data
    $num1 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_INT);
    $num2 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_INT);
    $operator = htmlspecialchars($_POST["operator"]);

    // error handlers
    $errors = false;
    if (empty($num1) or empty($num2) or
        !is_numeric($num1) or !is_numeric($num2)
    ) {
        echo "Please enter a number";
    }

    // calculate
    $res = match ($operator) {
        "add" => $num1 + $num2,
        "subtract" => $num1 - $num2,
        "multiply" => $num1 * $num2,
        "divide" => $num1 / $num2,
        default => 'Invalid operator'
    };
    echo "Result = $res";
}
?>
</body>
</html>