<?php
require_once 'config.php';
require_once 'auth.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$email = trim($_POST['email']);
$password = $_POST['password'];
$remember = isset($_POST['remember']);

$result = login_user($pdo, $email, $password, $remember);

if ($result['success']) {
    $redirect = isset($_SESSION['redirect_after_login']) ? $_SESSION['redirect_after_login'] : 'index.php';
    unset($_SESSION['redirect_after_login']);
    header('Location: ' . $redirect);
    exit;
} else {
    $_SESSION['login_error'] = $result['error'];
    header('Location: login.php');
    exit;
}
?>