<?php
require_once 'config.php';
require_once 'auth.php';

if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: services.php');
    exit;
}

$service = trim($_POST['service_name']);
$message = trim($_POST['message']);

if (empty($service)) {
    header('Location: services.php?error=Выберите услугу');
    exit;
}

if (add_order($service, $message)) {
    header('Location: profile.php?success=Заявка на услугу "' . urlencode($service) . '" успешно создана!');
} else {
    header('Location: services.php?error=Ошибка при создании заявки');
}
exit;
?>