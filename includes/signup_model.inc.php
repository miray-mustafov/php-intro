<?php
declare(strict_types=1); // allowing type declarations for clarity and less mistakes
function get_username(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);// grabs one piece of data or false if no match
    return $result;
}
function get_email(string $email){
    $query = "SELECT username FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);// grabs one piece of data or false if no match
    return $result;
}