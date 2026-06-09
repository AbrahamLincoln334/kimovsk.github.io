<?php
require_once 'config.php';
require_once 'auth.php';
if (!is_admin()) { header('Location: index.php'); exit; }

$users_count = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
$orders_count = $pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn();
$pending_orders = $pdo->query("SELECT COUNT(*) FROM orders WHERE status = 'На рассмотрении'")->fetchColumn();
$news_count = $pdo->query("SELECT COUNT(*) FROM news")->fetchColumn();
?>
<!DOCTYPE html>
<html lang="ru">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Админ-панель | Администрация Кимовский район</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="top-bar"><div class="container"><span>Тульская область, Кимовский район</span><span>Тел: <a href="tel:+74873551234">+7 (48735) 5-12-34</a></span></div></div>
<header><div class="container"><div class="header-inner">
    <a href="index.php" class="logo"><div class="logo-icon">КР</div><div class="logo-text"><h1>Кимовский район</h1><span>Подготовка тендеров</span></div></a>
    <div class="burger" onclick="toggleMenu()"><span></span><span></span><span></span></div>
    <nav id="nav"><a href="index.php">Главная</a><a href="about.php">О проекте</a><a href="services.php">Услуги</a><a href="news.php">Новости</a><?php render_auth_nav(); ?></nav>
</div></div></header>

<div class="container" style="padding-top: 40px; padding-bottom: 60px;">
    <div class="admin-layout">
        <aside class="admin-sidebar">
            <h3>Управление</h3>
            <a href="admin.php" class="active">Дашборд</a>
            <a href="manage_orders.php"> Заявки</a>
            <a href="manage_users.php">Пользователи</a>
            <a href="index.php">На сайт</a>
        </aside>
        <main class="admin-content">
            <h2 style="margin-bottom: 20px; color: var(--primary);">Панель администратора</h2>
            <div class="admin-stats">
                <div class="stat-card-admin"><div class="num"><?= $users_count ?></div><div class="label">Пользователей</div></div>
                <div class="stat-card-admin"><div class="num"><?= $orders_count ?></div><div class="label">Всего заявок</div></div>
                <div class="stat-card-admin"><div class="num"><?= $pending_orders ?></div><div class="label">На рассмотрении</div></div>
            </div>
            <div style="background: var(--gray-50); padding: 20px; border-radius: 8px;">
                <h4 style="margin-bottom: 10px;">Системный статус</h4>
                <p style="color: var(--gray-600); font-size: 0.9rem;">Все модули активны. Рекомендуется оперативно обрабатывать заявки со статусом «На рассмотрении».</p>
            </div>
        </main>
    </div>
</div>
<script>function toggleMenu(){document.getElementById('nav').classList.toggle('open');document.querySelector('.burger').classList.toggle('open');}
document.addEventListener('click',function(e){const n=document.getElementById('nav'),b=document.querySelector('.burger');if(n.classList.contains('open')&&!n.contains(e.target)&&!b.contains(e.target))
{n.classList.remove('open');b.classList.remove('open');}});</script>
</body></html>