<?php
require_once '../models/User.php';

$db = new Database();
$conn = $db->getConnection();
$user = new User($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loggedInUser = $user->login($username, $password);
    if ($loggedInUser) {
        echo "Добро пожаловать, " . htmlspecialchars($loggedInUser['username']) . "!";

    } else {
        echo "Неверное имя пользователя или пароль!";
    }
}
?>

<form method="POST" action="">
    <input type="text" name="username" placeholder="Имя пользователя" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <button type="submit">Войти</button>
</form>
