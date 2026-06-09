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
  <title>Вход в систему | Администрация Кимовский район</title>
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
            <div class="burger" onclick="toggleMenu()">
                <span></span><span></span><span></span>
            </div>
            <nav id="nav">
                <a href="index.php" class="active">Главная</a>
                <a href="about.php">О проекте</a>
                <a href="services.php">Услуги</a>
                <a href="news.php">Новости</a>

                <?php render_auth_nav(); ?>
            </nav>
        </div>
    </div>
</header>
<div class="auth-page">
  <div class="auth-card">
    <div class="auth-logo"></a></div>
    <h2>Вход в систему</h2>
    <p class="auth-subtitle">Введите данные для доступа к личному кабинету</p>
    
    <?php if (isset($_SESSION['login_error'])): ?>
      <div style="background:#fee2e2; color:#991b1b; padding:12px; border-radius:8px; margin-bottom:16px; font-size:0.9rem;">
        <?= htmlspecialchars($_SESSION['login_error']) ?>
        <?php unset($_SESSION['login_error']); ?>
      </div>
    <?php endif; ?>

    <form class="auth-form" action="login_handler.php" method="POST">
      <div class="form-group"><label for="login-email">Электронная почта</label><input type="email" id="login-email" name="email" placeholder="example@kimrayon.ru" required></div>
      <div class="form-group"><label for="login-password">Пароль</label><input type="password" id="login-password" name="password" placeholder="Введите пароль" required></div>
      <div class="remember-row"><label><input type="checkbox" name="remember" class="checkbox-custom"> Запомнить меня</label><a href="#">Забыли пароль?</a></div>
      <div class="auth-actions"><button type="submit" class="btn btn-primary w-100">Войти →</button></div>
    </form>
    <div class="auth-links" style="margin-top: 24px;">Нет учётной записи? <a href="register.php">Зарегистрироваться</a></div>
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