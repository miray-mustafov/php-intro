<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        require_once "dbh.inc.php"; // running all code from that file
        $query = "DELETE FROM users WHERE username = ? AND pwd = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $pwd]);

        //close the connection
        $pdo = null;
        $stmt = null;
        header("location:../index.php");

        die();//exit()
    } catch (PDOException $e) {
        die('Query Failed' . $e->getMessage());
    }

} else {
    header("location:../index.php");
}