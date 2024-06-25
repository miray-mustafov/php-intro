<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try {
        require_once "dbh.inc.php"; // running all code from that file
        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $pwd, $email]);

        //close the connection
        $pdo = null;
        $stmt = null;
        header("location:../index.php");

        die();//exit()
    } catch (PDOException $e) {
        die('Query Failed' . $e->getMessage());
    }

} else {
    header("location:../database.php");
}