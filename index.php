<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<main>
    <?php
    $a = 123;
    $res = match ($a) {
        2 => 'variable is 2',
        1 => 'variable is 1',
        default => "variable is $a",
    };
    echo $res
    ?>

    <form action="includes/formhandler.php" method="post">
        <label for="firstname">Firstname</label>
        <input required id="firstname" type="text" name='firstname' placeholder=Firstname...>

        <label required for="lastname">Lastname</label>
        <input id="lastname" type="text" name='lastname' placeholder=Lastname...>

        <label for="favouritepet">Favourite Pet</label>
        <select name="favouritepet" id="favouritepet">
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</main>

</body>

</html>