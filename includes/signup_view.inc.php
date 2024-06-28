<?php
declare(strict_types=1); // allowing type declarations for clarity and less mistakes

function check_signup_errors()
{
    if (isset($_POST["errors_signup"])) {
        $errors = $_POST["errors_signup"];
        echo '<br>';
        foreach ($errors as $e) {
            echo "$e <br>";
        }
        unset($_POST["errors_signup"]);// clear the session data
    }
}