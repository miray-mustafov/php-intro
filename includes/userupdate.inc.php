<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    $id = 3; //currently hardcoded
    try {
        require_once "dbh.inc.php"; // running all code from that file
//        $query = "UPDATE users SET username=:username ,pwd=:pwd, email=:email WHERE id=2;";
        $query = "UPDATE users SET username = ? ,pwd=?, email=? WHERE id=?;";
        $stmt = $pdo->prepare($query);

//        $stmt->bindParam(":username", $username);
//        $stmt->bindParam(":username", $username);
//        $stmt->bindParam(":username", $username);
        $stmt->execute([$username, $pwd, $email, $id]);

        $stmt->execute();

        //close the connection
        $pdo = null;
        $stmt = null;
        header("location:../index.php");

        die();//exit()
    } catch (PDOException $e) {
        die('Query Failed ' . $e->getMessage());
    }

} else {
    header("location:../dbinsert.php");
}