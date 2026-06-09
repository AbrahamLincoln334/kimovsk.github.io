<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости — Стр. 3 | Администрация Кимовский район</title>
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

    <section class="hero compact">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">Архив новостей</div>
                <h2>Новости проекта <span>Страница 3</span></h2>
                <p>События ноября — декабря 2025 года</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">20 декабря 2025</div>
                        <h3>Закупка офисного оборудования</h3>
                        <p>Успешно проведён электронный аукцион на поставку компьютерной техники для администрации.</p>
                        <span class="news-tag tag-event">Закупка</span>
                        <div class="news-card-footer"><a href="news-equipment.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">05 декабря 2025</div>
                        <h3>Ремонт муниципальных дорог</h3>
                        <p>Опубликована документация для участия в конкурсе на ямочный ремонт дорог района.</p><span
                            class="news-tag tag-law">Инфраструктура</span>
                        <div class="news-card-footer"><a href="news-roads.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">15 ноября 2025</div>
                        <h3>Утверждён план закупок на 2026</h3>
                        <p>План-график закупок муниципального образования утверждён и загружен в систему.</p><span
                            class="news-tag tag-update">Планирование</span>
                        <div class="news-card-footer"><a href="news-plan-2026.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">25 ноября 2025</div>
                        <h3>Старт разработки платформы</h3>
                        <p>Команда подрядчика приступила к написанию кода бэкенда и настройке серверной инфраструктуры.
                        </p><span class="news-tag tag-dev">Разработка</span>
                        <div class="news-card-footer"><a href="news-dev-start.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">01 ноября 2025</div>
                        <h3>Сбор требований от заказчиков</h3>
                        <p>Проведены интервью с руководителями отделов администрации для формирования ТЗ.</p><span
                            class="news-tag tag-event">Аналитика</span>
                        <div class="news-card-footer"><a href="news-requirements.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">15 октября 2025</div>
                        <h3>Подписание контракта на разработку</h3>
                        <p>Официально заключён договор с подрядчиком на создание сайта подготовки тендеров.</p><span
                            class="news-tag tag-law">Документы</span>
                        <div class="news-card-footer"><a href="news-contract.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <a href="news.php">1</a>
                <a href="news2.php">2</a>
                <a class="active" href="news3.php">3</a>
            </div>
        </div>
    </section>

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

    <script>
        function toggleMenu() { document.getElementById('nav').classList.toggle('open'); document.querySelector('.burger').classList.toggle('open'); }
        document.addEventListener('click', function (e) { const n = document.getElementById('nav'), b = document.querySelector('.burger'); if (n.classList.contains('open') && !n.contains(e.target) && !b.contains(e.target)) { n.classList.remove('open'); b.classList.remove('open'); } });
    </script>
</body>

</html>