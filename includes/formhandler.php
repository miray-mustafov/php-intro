<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // htmlspecialchars sanitize the form input from potential hackings with code input
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $pet = htmlspecialchars($_POST['favouritepet']);

    if(
        // checking if inputs empty
        empty($firstname) || empty($lastname)
    ){
        // exit();
        header("Location: ../index.php");
    }
    echo "The data:<br>";
    echo "$firstname $lastname<br>$pet";
}
else{
    // redirect user to homepage
    header("Location: ../index.php");
}