<?php
require_once 'config.php';
require_once 'auth.php';
if (!is_admin()) { header('Location: index.php'); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_status'])) {
        $pdo->prepare("UPDATE orders SET status = ? WHERE id = ?")->execute([$_POST['status'], (int)$_POST['order_id']]);
        $msg = "Статус обновлён.";
    } elseif (isset($_POST['delete_order'])) {
        $pdo->prepare("DELETE FROM orders WHERE id = ?")->execute([(int)$_POST['order_id']]);
        $msg = "Заявка удалена.";
    }
}
$orders = $pdo->query("SELECT o.*, u.name, u.surname, u.email FROM orders o JOIN users u ON o.user_id = u.id ORDER BY o.created_at DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Заявки | Админ-панель</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="top-bar"><div class="container"><span>Тульская область, Кимовский район</span><span>Тел: <a href="tel:+74873551234">+7 (48735) 5-12-34</a></span></div></div>
<header><div class="container"><div class="header-inner"><a href="index.php" class="logo">
    <div class="logo-icon">КР</div><div class="logo-text"><h1>Кимовский район</h1><span>Подготовка тендеров</span></div></a>
    <div class="burger" onclick="toggleMenu()"><span></span><span></span><span></span></div><nav id="nav"><a href="index.php">Главная</a><a href="about.php">О проекте</a><a href="services.php">Услуги</a>
    <a href="news.php">Новости</a><?php render_auth_nav(); ?></nav></div></div></header>
<div class="container" style="padding-top: 40px; padding-bottom: 60px;"><div class="admin-layout">
<aside class="admin-sidebar"><h3>Управление</h3><a href="admin.php">Дашборд</a><a href="manage_orders.php" class="active">Заявки</a>
<a href="manage_users.php">Пользователи</a><a href="index.php">На сайт</a></aside>
<main class="admin-content">
    <h2>Управление заявками</h2>
    <?php if (isset($msg)): ?><div style="background:#dcfce7; color:#166534; padding:12px; border-radius:6px; margin-bottom:16px;"><?= htmlspecialchars($msg) ?></div><?php endif; ?>
    <table class="admin-table">
        <thead><tr><th>ID</th><th>Пользователь</th><th>Услуга</th><th>Статус</th><th>Дата</th><th>Действия</th></tr></thead>
        <tbody>
        <?php foreach ($orders as $o): ?>
        <tr>
            <td><?= $o['id'] ?></td>
            <td><?= htmlspecialchars($o['surname']) ?> <?= htmlspecialchars($o['name']) ?><br><small style="color:var(--gray-600)"><?= htmlspecialchars($o['email']) ?></small></td>
            <td><?= htmlspecialchars($o['service_name']) ?></td>
            <td><form method="POST" style="display:inline;">
                <input type="hidden" name="order_id" value="<?= $o['id'] ?>"><select name="status" onchange="this.form.submit()" style="padding:4px; border-radius:4px; border:1px solid var(--gray-300);">
                    <option <?= $o['status']=='На рассмотрении'?'selected':'' ?>>На рассмотрении</option><option <?= $o['status']=='В работе'?'selected':'' ?>>В работе</option>
                    <option <?= $o['status']=='Выполнен'?'selected':'' ?>>Выполнен</option><option <?= $o['status']=='Отклонён'?'selected':'' ?>>Отклонён</option>
                </select><input type="hidden" name="update_status" value="1"></form></td>
            <td><?= date('d.m.Y H:i', strtotime($o['created_at'])) ?></td>
            <td><form method="POST" style="display:inline;" onsubmit="return confirm('Удалить заявку?');"><input type="hidden" name="order_id" value="<?= $o['id'] ?>">
            <input type="hidden" name="delete_order" value="1"><button type="submit" class="btn-admin btn-delete">Удалить</button></form></td>
        </tr><?php endforeach; ?>
        </tbody>
    </table>
</main></div></div>
<script>function toggleMenu(){document.getElementById('nav').classList.toggle('open');document.querySelector('.burger').classList.toggle('open');}
document.addEventListener('click',function(e){const n=document.getElementById('nav'),b=document.querySelector('.burger');if(n.classList.contains('open')&&!n.contains(e.target)&&!b.contains(e.target))
{n.classList.remove('open');b.classList.remove('open');}});</script>
</body></html>