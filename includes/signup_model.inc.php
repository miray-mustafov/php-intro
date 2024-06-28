<?php
declare(strict_types=1); // allowing type declarations for clarity and less mistakes
function get_username(object $pdo, string $username)
{
//    $query = "SELECT username FROM users WHERE username = :username";
    $query = "SELECT username FROM users WHERE username = ?";
    $stmt = $pdo->prepare($query);
//    $stmt->bindParam(':username', $username);
    $stmt->execute([$username,]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);// grabs one piece of data or false if no match
    return $result;
}
function get_email(object $pdo,string $email){
//    $query = "SELECT username FROM users WHERE email = :email";
    $query = "SELECT username FROM users WHERE email = ?";
    $stmt = $pdo->prepare($query);
//    $stmt->bindParam(':email', $email);
    $stmt->execute([$email]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);// grabs one piece of data or false if no match
    return $result;
}

function set_user($pdo, $username, $password, $email)
{
    $query = "INSERT INTO users (username, pwd, email) VALUES (?,?,?)";
    $stmt = $pdo->prepare($query);
    $options = ['cost' => 12];
    $hashedPwd = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->execute([$username, $hashedPwd, $email]);
}