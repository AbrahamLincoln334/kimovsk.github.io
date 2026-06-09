<?php
require_once 'config.php';
require_once 'auth.php';
redirect_if_not_logged_in();

$user = get_user();
 
$stmt = $pdo->prepare("SELECT id, service_name, message, status, created_at FROM orders WHERE user_id = ? ORDER BY created_at DESC");
$stmt->execute([$user['user_id']]);
$orders = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личный кабинет | Администрация Кимовский район</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header><div class="container"><div class="header-inner">
  <a href="index.php" class="logo">
    <img src="images/logo.jpg" alt="Логотип" class="header-logo-img" onerror="this.style.display='none'">
    <div class="logo-text">
        <h1>Кимовский район</h1>
        <span>Подготовка тендеров</span>
    </div>
</a>
  <div class="burger" onclick="toggleMenu()"><span></span><span></span><span></span></div>
  <nav id="nav">
    <a href="index.php">Главная</a>
    <a href="about.php">О проекте</a>
    <a href="services.php">Услуги</a>
    <a href="news.php">Новости</a>
    <?php render_auth_nav(); ?>
  </nav>
</div></div></header>

<section class="profile-hero">
  <div class="container">
    <div class="profile-header">
      <div class="profile-avatar"><?= strtoupper(substr($user['user_surname'], 0, 1)) ?></div>
      <div class="profile-info">
        <h2><?= htmlspecialchars($user['user_surname']) ?> <?= htmlspecialchars($user['user_name']) ?></h2>
        <p><?= htmlspecialchars($user['user_email']) ?></p>
      </div>
    </div>
    <div class="profile-stats">
      <div class="profile-stat"><div class="num"><?= count($orders) ?></div><div class="label">Активных заявок</div></div>
      <div class="profile-stat"><div class="num"><?= date('d.m.Y') ?></div><div class="label">Текущая дата</div></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-title"><h2>Мои заказы</h2><p>История обращений</p><div class="accent-line"></div></div>
    
    <?php if (isset($_GET['success'])): ?>
      <div style="background:#dcfce7; color:#166534; padding:16px; border-radius:8px; margin-bottom:24px;"><?= htmlspecialchars($_GET['success']) ?></div>
    <?php endif; ?>
    <?php if (isset($_GET['error'])): ?>
      <div style="background:#fee2e2; color:#991b1b; padding:16px; border-radius:8px; margin-bottom:24px;"><?= htmlspecialchars($_GET['error']) ?></div>
    <?php endif; ?>

    <?php if (count($orders) === 0): ?>
      <div class="no-orders">
        <h3>Заказов пока нет</h3>
        <p>Перейдите в раздел услуг и оформите заявку</p>
        <a href="services.php" class="btn btn-primary" style="margin-top:16px;">Перейти к услугам</a>
      </div>
    <?php else: ?>
      <?php foreach ($orders as $order): 
    $status = !empty($order['status']) ? $order['status'] : 'На рассмотрении';
    $statusMap = [
        'На рассмотрении' => 'pending',
        'В работе' => 'progress',
        'Выполнен' => 'success',
        'Отклонён' => 'rejected'
    ];
    $statusClass = $statusMap[$status] ?? 'pending';
?>
<div class="order-card">
    <div class="order-info">
        <h4><?= htmlspecialchars($order['service_name']) ?></h4>
        <div class="order-date">Создан: <?= date('d.m.Y H:i', strtotime($order['created_at'])) ?></div>
    </div>
    <div class="order-meta">
        <span class="order-status status-<?= $statusClass ?>">
            <?= htmlspecialchars($status) ?>
        </span>
        <form method="POST" action="delete_order.php" onsubmit="return confirm('Удалить заявку?');">
            <input type="hidden" name="order_id" value="<?= $order['id'] ?>">
            <button type="submit" class="delete-btn">Удалить</button>
        </form>
    </div>
</div>
<?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

<footer><div class="container"><div class="footer-grid">
  <div class="footer-about"><h3>Кимовский район</h3><p>Проектирование и разработка веб-сайта подготовки тендеров.</p></div>
  <div class="footer-col"><h4>Навигация</h4><ul><li><a href="index.php">Главная</a></li><li><a href="about.php">О проекте</a></li><li><a href="services.php">Услуги</a></li><li><a href="news.php">Новости</a></li></ul></div>
  <div class="footer-col"><h4>Контакты</h4><ul><li><a>Адрес: г. Кимовск, Тульская обл.</a></li><li><a>Тел: +7 (48735) 5-12-34</a></li></ul></div>
</div></div></footer>

<script>
function toggleMenu(){document.getElementById('nav').classList.toggle('open');document.querySelector('.burger').classList.toggle('open');}
document.addEventListener('click',function(e){const n=document.getElementById('nav'),b=document.querySelector('.burger');if(n.classList.contains('open')&&!n.contains(e.target)&&!b.contains(e.target)){n.classList.remove('open');b.classList.remove('open');}});
</script>
</body>
</html>