<?php
require_once 'config.php';
require_once 'auth.php';
if (!is_admin()) { header('Location: index.php'); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_role'])) {
        $pdo->prepare("UPDATE users SET role = ? WHERE id = ?")->execute([$_POST['role'], (int)$_POST['user_id']]);
        $msg = "Роль обновлена.";
    } elseif (isset($_POST['delete_user'])) {
        $pdo->prepare("DELETE FROM users WHERE id = ?")->execute([(int)$_POST['user_id']]);
        $msg = "Пользователь удалён.";
    } elseif (isset($_POST['reset_pass'])) {
        $hash = password_hash('12345678', PASSWORD_DEFAULT);
        $pdo->prepare("UPDATE users SET password = ? WHERE id = ?")->execute([$hash, (int)$_POST['user_id']]);
        $msg = "Пароль сброшен на 12345678.";
    }
}
$users = $pdo->query("SELECT * FROM users ORDER BY created_at DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Пользователи | Админ-панель</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="top-bar"><div class="container"><span>Тульская область, Кимовский район</span><span>Тел: <a href="tel:+74873551234">+7 (48735) 5-12-34</a></span></div></div>
<header><div class="container"><div class="header-inner"><a href="index.php" class="logo"><div class="logo-icon">КР</div><div class="logo-text"><h1>Кимовский район</h1>
<span>Подготовка тендеров</span></div></a><div class="burger" onclick="toggleMenu()"><span></span><span></span><span></span></div><nav id="nav"><a href="index.php">Главная</a>
<a href="about.php">О проекте</a><a href="services.php">Услуги</a><a href="news.php">Новости</a><?php render_auth_nav(); ?></nav></div></div></header>
<div class="container" style="padding-top: 40px; padding-bottom: 60px;"><div class="admin-layout">
<aside class="admin-sidebar"><h3>Управление</h3><a href="admin.php">Дашборд</a><a href="manage_orders.php">Заявки</a>
<a href="manage_users.php" class="active">Пользователи</a><a href="index.php"> На сайт</a></aside>
<main class="admin-content">
    <h2>Управление пользователями</h2>
    <?php if (isset($msg)): ?><div style="background:#dcfce7; color:#166534; padding:12px; border-radius:6px; margin-bottom:16px;"><?= htmlspecialchars($msg) ?></div><?php endif; ?>
    <table class="admin-table">
        <thead><tr><th>ID</th><th>ФИО</th><th>Email</th><th>Роль</th><th>Дата</th><th>Действия</th></tr></thead>
        <tbody>
        <?php foreach ($users as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= htmlspecialchars($u['surname']) ?> <?= htmlspecialchars($u['name']) ?></td>
            <td><?= htmlspecialchars($u['email']) ?></td>
            <td><form method="POST" style="display:inline;"><input type="hidden" name="user_id" value="<?= $u['id'] ?>">
            <select name="role" onchange="this.form.submit()" style="padding:4px; border-radius:4px;"><option <?= $u['role']=='user'?'selected':'' ?>>user</option>
            <option <?= $u['role']=='admin'?'selected':'' ?>>admin</option></select><input type="hidden" name="update_role" value="1"></form></td>
            <td><?= date('d.m.Y', strtotime($u['created_at'])) ?></td>
            <td>
                <form method="POST" style="display:inline;" onsubmit="return confirm('Сбросить пароль на 12345678?');"><input type="hidden" name="user_id" value="<?= $u['id'] ?>">
                <input type="hidden" name="reset_pass" value="1"><button type="submit" class="btn-admin btn-status">Сброс</button></form>
                <form method="POST" style="display:inline;" onsubmit="return confirm('Удалить?');"><input type="hidden" name="user_id" value="<?= $u['id'] ?>">
                <input type="hidden" name="delete_user" value="1"><button type="submit" class="btn-admin btn-delete">Удалить</button></form>
            </td>
        </tr><?php endforeach; ?>
        </tbody>
    </table>
</main></div></div>
<script>function toggleMenu(){document.getElementById('nav').classList.toggle('open');document.querySelector('.burger').classList.toggle('open');}
document.addEventListener('click',function(e){const n=document.getElementById('nav'),b=document.querySelector('.burger');if(n.classList.contains('open')&&!n.contains(e.target)&&!b.contains(e.target))
{n.classList.remove('open');b.classList.remove('open');}});</script>
</body></html>