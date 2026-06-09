<?php
require_once 'config.php';
require_once 'auth.php';

if (is_logged_in()) header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация | Администрация Кимовский район</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
        <div class="container">
            <div class="header-inner">
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
                <a href="news.php" class="active">Новости</a>

                <?php render_auth_nav(); ?>
                    </nav>
            </div>
        </div>
    </header>
<div class="auth-page">
  <div class="auth-card">
    <div class="auth-logo"><a href="index.php"></a></div>
    <h2>Создать аккаунт</h2>
    <p class="auth-subtitle">Регистрация доступна только для сотрудников администрации</p>
    
    <?php if (isset($_SESSION['register_error'])): ?>
      <div style="background:#fee2e2; color:#991b1b; padding:12px; border-radius:8px; margin-bottom:16px; font-size:0.9rem;">
        <?= htmlspecialchars($_SESSION['register_error']) ?>
        <?php unset($_SESSION['register_error']); ?>
      </div>
    <?php endif; ?>

    <form class="auth-form" action="register_handler.php" method="POST">
      <div class="form-row">
        <div class="form-group"><label>Фамилия *</label><input type="text" name="surname" placeholder="Иванов" required></div>
        <div class="form-group"><label>Имя *</label><input type="text" name="name" placeholder="Иван" required></div>
      </div>
      <div class="form-group"><label>Корпоративная почта *</label><input type="email" name="email" placeholder="ivanov@kimrayon.ru" required></div>
      <div class="form-group"><label>Телефон</label><input type="tel" name="phone" placeholder="+7 (___) ___-__-__"></div>
      <div class="form-group"><label>Пароль *</label><input type="password" name="password" placeholder="Минимум 8 символов" required minlength="8"></div>
      <div class="form-group"><label>Подтверждение пароля *</label><input type="password" name="confirm_password" placeholder="Повторите пароль" required minlength="8"></div>
      <div class="remember-row" style="margin:20px 0 10px;"><label><input type="checkbox" name="agree" class="checkbox-custom" required>Я ознакомлен с <a href="#" style="color:var(--primary-light); margin-left:4px;">политикой безопасности</a></label></div>
      <div class="auth-actions"><button type="submit" class="btn btn-secondary w-100">Зарегистрироваться →</button></div>
    </form>
    <div class="auth-links" style="margin-top: 24px;">Уже есть аккаунт? <a href="login.php">Войти</a></div>
  </div>
</div>
<footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>Кимовский район</h3>
                    <p>Проектирование и разработка веб-сайта подготовки тендеров администрации муниципального
                        образования Кимовский район.</p>
                </div>
                <div class="footer-col">
                    <h4>Навигация</h4>
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="about.php">О проекте</a></li>
                        <li><a href="services.php">Услуги</a></li>
                        <li><a href="news.php">Новости</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Услуги</h4>
                    <ul>
                        <li><a href="services.php">Проектирование</a></li>
                        <li><a href="services.php">Веб-разработка</a></li>
                        <li><a href="services.php">Интеграция с ЕИС</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Контакты</h4>
                    <ul>
                        <li><a>г. Кимовск</a></li>
                        <li><a>+7 (48735) 5-12-34</a></li>
                        <li><a>tender@kimrayon.ru</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>