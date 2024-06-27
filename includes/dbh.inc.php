<?php
//data source name
$host='localhost';
$dbname = 'php_intro';
$dbusername = "root";
$dbpassword = "";

$dsn = "mysql:host=$host;dbname=$dbname";
try { // ways to connect
    //mysql (no protection to sql injections),
    //mysql i (improved, some protection)
    //pdo - php data objects (more flexible)


    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    //set the pdo to throw exception if error occur on connection
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die( "Connection failed: " . $e->getMessage());

}