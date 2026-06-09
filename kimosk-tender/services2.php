<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги - Страница 2 | Администрация Кимовский район</title>
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

<section class="hero compact"><div class="container"><div class="hero-content"><div class="hero-badge">Услуги - Страница 2</div><h2>Сопровождение и <span>консалтинг</span></h2><p>Экспертная поддержка на всех этапах закупочной деятельности</p></div></div></section>

<section class="section"><div class="container">
    <div class="services-grid">
        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv7.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Сопровождение закупок</h3>
            <p>Полный цикл ведения тендера от планирования до заключения контракта.</p>
            <ul><li>Проверка соответствия 44-ФЗ</li><li>Координация с ЕИС</li><li>Контроль сроков</li></ul>
            <div class="service-card-footer">
    <a href="service-procurement.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Сопровождение закупок">
            <input type="hidden" name="message" value="Заказ в один клик">
            <button type="submit" class="service-btn order">Заказать</button>
        </form>
    <?php else: ?>
        <a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a>
    <?php endif; ?>
</div>
        </div>

        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv8.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Юридический аудит</h3>
            <p>Экспертиза документации на соответствие законодательству.</p>
            <ul><li>Анализ рисков</li><li>Проверка условий контракта</li><li>Подготовка ответов на жалобы</li></ul>
            <div class="service-card-footer">
    <a href="service-legal.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Юридический аудит">
            <input type="hidden" name="message" value="Заказ в один клик">
            <button type="submit" class="service-btn order">Заказать</button>
        </form>
    <?php else: ?>
        <a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a>
    <?php endif; ?>
</div>
        </div>

        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv9.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Обучение сотрудников</h3>
            <p>Практические курсы для контрактных служб и заказчиков.</p>
            <ul><li>Разбор реальных кейсов</li><li>Работа в личном кабинете</li><li>Сертификаты по итогам</li></ul>
            <div class="service-card-footer">
    <a href="service-staff-training.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Обучение сотрудников">
            <input type="hidden" name="message" value="Заказ в один клик">
            <button type="submit" class="service-btn order">Заказать</button>
        </form>
    <?php else: ?>
        <a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a>
    <?php endif; ?>
</div>
        </div>

        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv10.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Аналитика и отчётность</h3>
            <p>Формирование аналитических отчётов для руководства.</p>
            <ul><li>Дашборды KPI</li><li>Экспорт в Excel/PDF</li><li>Прогнозирование расходов</li></ul>
            <div class="service-card-footer">
    <a href="service-analytics.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Аналитика и отчётность">
            <input type="hidden" name="message" value="Заказ в один клик">
            <button type="submit" class="service-btn order">Заказать</button>
        </form>
    <?php else: ?>
        <a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a>
    <?php endif; ?>
</div>
        </div>

        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv11.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Настройка ЕИС</h3>
            <p>Аудит и оптимизация работы с Единой информационной системой.</p>
            <ul><li>Обновление шаблонов</li><li>Интеграция с внутренними системами</li><li>Обучение работе с API</li></ul>
           <div class="service-card-footer">
    <a href="service-eis-setup.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Настройка ЕИС">
            <input type="hidden" name="message" value="Заказ в один клик">
            <button type="submit" class="service-btn order">Заказать</button>
        </form>
    <?php else: ?>
        <a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a>
    <?php endif; ?>
</div>
        </div>

        <div class="service-card">
           <div class="card-screenshot">
    <img src="images/serv12.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Техническая поддержка</h3>
            <p>Круглосуточное сопровождение и оперативное решение инцидентов.</p>
            <ul><li>Мониторинг серверов</li><li>Резервное копирование</li><li>Обновления и патчи</li></ul>
            <div class="service-card-footer">
    <a href="service-techsupport.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Техническая поддержка">
            <input type="hidden" name="message" value="Заказ в один клик">
            <button type="submit" class="service-btn order">Заказать</button>
        </form>
    <?php else: ?>
        <a href="login.php" class="service-btn order disabled-btn" onclick="event.preventDefault(); window.location.href='login.php';">Требуется вход</a>
    <?php endif; ?>
</div>
        </div>
    </div>

    <div class="pagination" style="margin-top: 40px;">
        <a href="services.php">1</a>
        <a href="services2.php" class="active">2</a>
        <a href="services3.php">3</a>
    </div>
</div></section>

<footer><div class="container"><div class="footer-grid">
    <div class="footer-about"><h3>Кимовский район</h3><p>Проектирование и разработка веб-сайта подготовки тендеров.</p></div>
    <div class="footer-col"><h4>Навигация</h4><ul><li><a href="index.php">Главная</a></li><li><a href="about.php">О проекте</a></li><li><a href="services.php">Услуги</a></li><li><a href="news.php">Новости</a></li></ul></div>
    <div class="footer-col"><h4>Контакты</h4><ul><li><a>Адрес: г. Кимовск, Тульская обл.</a></li><li><a>Тел: +7 (48735) 5-12-34</a></li></ul></div>
</div></div></footer>

<script>
function toggleMenu(){document.getElementById('nav').classList.toggle('open');document.querySelector('.burger').classList.toggle('open');}
document.addEventListener('click',function(e){const n=document.getElementById('nav'),b=document.querySelector('.burger');if(n.classList.contains('open')&&!n.contains(e.target)&&!b.contains(e.target)){n.classList.remove('open');b.classList.remove('open');}});
function selectService(name) { const select = document.getElementById('service-select'); if (select) select.value = name; }
</script>
</body>
</html>