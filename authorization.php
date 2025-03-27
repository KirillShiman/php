<?php
session_start();
include ('conn.php');
require_once ('authUser.php');
$auth = new Auth($conn);

$name = $_POST['name'];
$password = $_POST['password'];

$role = $auth->login($name, $password);

if ($role) {
    if ($role == 'admin') {
        header('Location: adm.php');
    } elseif ($role == 'user') {
        header('Location: user.php');
    }
} else {
    echo "Ошибка входа. Проверьте имя пользователя и пароль.";
}