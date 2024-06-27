<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $email = $_POST['email'];
    try {
        require_once "dbh.inc.php"; // running all code from that file
        require_once "signup_model.inc.php";
//        require_once "signup_view.inc.php";
        require_once "signup_contr.inc.php";

        $errors = [];
        if (is_input_empty($username, $password, $email)) {
            $errors['empty_input'] = "Fill in all the fields!";
        }
        if (is_email_invalid($email)) {
            $errors['invalid_email'] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors['username_taken'] = "Username already taken!";
        }
        if(is_email_registered( $pdo, $email)){
            $errors['email_used'] = "Email already registered!";
        }

        require_once 'core/config_session.php';//will that work ?
        if ($errors){
            $_SESSION['errors'] = $errors; // save the errors in the session, we need session started
            header("location: ../index.php");
            die();
        }


        //        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
//        $stmt = $pdo->prepare($query);
//        $stmt->execute([$username, $pwd, $email]);
//
//        //close the connection
//        $pdo = null;
//        $stmt = null;
//        header("location:../index.php");
//
//        die();//exit()
    } catch (PDOException $e) {
        die('Query Failed' . $e->getMessage());
    }
} else {
    header('Location: ../index.php');
    die(); // stop any further code from running
}