<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги - Страница 3 | Администрация Кимовский район</title>
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

<section class="hero compact"><div class="container"><div class="hero-content"><div class="hero-badge">Услуги - Страница 3</div><h2>Автоматизация и <span>экспертиза</span></h2><p>Инновационные решения для оптимизации муниципальных закупок</p></div></div></section>

<section class="section"><div class="container">
    <div class="services-grid">
        <div class="service-card">
            <div class="card-screenshot">
    <img src="images/serv13.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Разработка ТЗ</h3>
            <p>Профессиональное составление технических заданий любой сложности.</p>
            <ul><li>Соответствие ГОСТ</li><li>Учёт специфики отрасли</li><li>Проверка на неоднозначность</li></ul>
            <div class="service-card-footer">
    <a href="service-tz.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Разработка ТЗ">
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
    <img src="images/serv14.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Обоснование цены контракта</h3>
            <p>Обоснование начальной максимальной цены контракта рыночными методами.</p>
            <ul><li>Анализ цен конкурентов</li><li>Расчёт по нормативам</li><li>Подготовка отчёта для ФАС</li></ul>
            <div class="service-card-footer">
    <a href="service-nmcc.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Обоснование цены контракта">
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
    <img src="images/serv15.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Антикоррупционный аудит</h3>
            <p>Проверка процедур на соответствие требованиям 273-ФЗ.</p>
            <ul><li>Выявление конфликтов интересов</li><li>Аудит документации</li><li>Рекомендации по устранению</li></ul>
            <div class="service-card-footer">
    <a href="service-anticorruption.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Антикоррупционный аудит">
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
    <img src="images/serv16.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Автоматизация документооборота</h3>
            <p>Настройка маршрутов согласования и электронного документооборота.</p>
            <ul><li>Интеграция с СЭД</li><li>Электронная подпись</li><li>Архивирование данных</li></ul>
            <div class="service-card-footer">
    <a href="service-docflow.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Автоматизация документооборота">
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
    <img src="images/serv17.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Интеграция с CRM</h3>
            <br><p>Подключение к системам управления взаимоотношениями с контрагентами.</p>
            <ul><li>Обмен данными в реальном времени</li><li>Уведомления о статусах</li><li>Единая база поставщиков</li></ul>
            <div class="service-card-footer">
    <a href="service-crm.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Интеграция с CRM">
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
    <img src="images/serv18.jpg" alt="Скриншот услуги">
    <span class="placeholder">Место для скриншота</span>
</div>
            <h3>Миграция данных</h3><br>
            <p>Безопасный перенос архивов закупок из старых систем в новую платформу.</p>
            <ul><li>Маппинг полей</li><li>Проверка целостности</li><li>Резервное копирование</li></ul>
            <div class="service-card-footer">
    <a href="service-migration.php" class="service-btn details">Подробнее</a>
    <?php if (is_logged_in()): ?>
        <form method="POST" action="order_handler.php" style="display:inline;">
            <input type="hidden" name="service_name" value="Миграция данных">
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
        <a href="services2.php">2</a>
        <a href="services3.php" class="active">3</a>
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