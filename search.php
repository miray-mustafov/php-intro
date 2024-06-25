<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];

    try {
        require_once "includes/dbh.inc.php"; // running all code from that file
        $query = "SELECT * FROM users WHERE username = ?";// grab all rows where has username match
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username,]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);// fits data in associative array
        //close the connection
        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die('Query Failed' . $e->getMessage());
    }
} else {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>Search results</h3>
<?php
if (empty($results)) {
    echo 'No matches';
} else {
    foreach ($results as $row) {
        echo htmlspecialchars($row['username'])  . ' ';
        echo htmlspecialchars($row['pwd']) . ' ';
        echo htmlspecialchars($row['created_at']) . ' ';
        echo "<br>";
    }
}
?>
</body>
</html>
