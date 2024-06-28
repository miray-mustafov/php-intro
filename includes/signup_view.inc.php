<?php
declare(strict_types=1); // allowing type declarations for clarity and less mistakes

function check_signup_errors()
{
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];
        echo '<br>';
        foreach ($errors as $e) {
            echo "$e <br>";
        }
        unset($_SESSION["errors_signup"]);// clear the session data
    } else if (isset($_GET["signup"]) and $_GET["signup"] === "success") {
        echo '<br>';
        echo 'Signup SUCCESSFUL';
    }
}

function signup_inputs()
{


    if (isset($_SESSION["signup_data"]['username']) and isset($_SESSION["errors_signup"]['username_taken'])) {
        $val = $_SESSION["signup_data"]['username'];
        echo '<input type="text" name="username" value="'. $val .'">';
    } else {
        echo '<input type="text" name="username" placeholder="Username...">';
    }

    echo '<input type="password" name="pwd" placeholder="Password...">';

    if (isset($_SESSION["signup_data"]['email']) and
        isset($_SESSION["errors_signup"]['email_used']) and
        isset($_SESSION["errors_signup"]['invalid_email']))
    {
        $val = $_SESSION["signup_data"]['email'];
        echo '<input type="text" name="email" value="'. $val .'">';
    } else {
        echo '<input type="text" name="email" placeholder="Email...">';
    }
}