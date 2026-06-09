<?php
require_once 'config.php';
require_once 'auth.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !is_logged_in()) {
    header('Location: services.php');
    exit;
}

$service = trim($_POST['service_name']);
$message = trim($_POST['message'] ?? 'Заказ в один клик');

if (empty($service)) {
    header('Location: services.php?error=Не выбрана услуга');
    exit;
}

if (add_order($service, $message)) {
    header('Location: profile.php?success=Заявка на "' . urlencode($service) . '" успешно создана!');
} else {
    header('Location: services.php?error=Ошибка при создании заявки');
}
exit;
?>