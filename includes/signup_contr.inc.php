<?php
declare(strict_types=1); // allowing type declarations for clarity and less mistakes

function is_input_empty(string $username, string $pwd, $email): bool
{
    return empty($username) and empty($pwd) and empty($email);
}

function is_email_invalid(string $email)
{
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_username_taken(object $pdo, $username): mixed
{
    return get_username($pdo, $username);
}

function is_email_registered(object $pdo, string $email): bool
{
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}
function create_user(object $pdo, string $username, string $password, string $email)
{
    set_user($pdo, $username, $password, $email);
}