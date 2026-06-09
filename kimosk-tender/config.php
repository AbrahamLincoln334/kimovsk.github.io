<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_NAME', 'kimovsk_tender');
define('DB_USER', 'root');
define('DB_PASS', ''); 

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}

function is_logged_in() {
    return isset($_SESSION['user_id']);
}

function get_user() {
    if (!is_logged_in()) return null;
    return $_SESSION;
}

function redirect_if_not_logged_in() {
    if (!is_logged_in()) {
        $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI'];
        header('Location: login.php');
        exit;
    }
}

function add_order($service, $message) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO orders (user_id, service_name, message) VALUES (?, ?, ?)");
    return $stmt->execute([$_SESSION['user_id'], $service, $message]);
}
?>