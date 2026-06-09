<?php
require_once 'config.php';
require_once 'auth.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !is_logged_in()) {
    header('Location: profile.php');
    exit;
}

$order_id = (int)$_POST['order_id'];
$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare("DELETE FROM orders WHERE id = ? AND user_id = ?");
$stmt->execute([$order_id, $user_id]);

if ($stmt->rowCount() > 0) {
    header('Location: profile.php?success=Заявка успешно удалена');
} else {
    header('Location: profile.php?error=Не удалось удалить заявку');
}
exit;
?>