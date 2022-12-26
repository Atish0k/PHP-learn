<?php
//Пробегаемся по базе данных с переданным логином и паролем, если нашли совпадение (пользователя) вернем true
function checkAuth(string $login, string $password): bool
{
    $users = require __DIR__ . '/userDB.php';

    foreach ($users as $user) {
        if ($user['login'] === $login
            && $user['password'] === $password
        ) {
            return true;
        }
    }

    return false;
}
//функция возвращает логин текущего пользователя
function getUserLogin(): ?string
{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCookie = $_COOKIE['password'] ?? '';

    if (checkAuth($loginFromCookie, $passwordFromCookie)) {
        return $loginFromCookie;
    }

    return null;
}