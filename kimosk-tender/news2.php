<?php
require_once 'config.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости — Стр. 2 | Администрация Кимовский район</title>
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
                <h2>Новости проекта <span>Страница 2</span></h2>
                <p>События февраля — марта 2026 года</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">28 февраля 2026</div>
                        <h3>Обновлены шаблоны тендерной документации</h3>
                        <p>Добавлены новые макеты технических заданий и проектов контрактов в соответствии с последними
                            поправками.</p><span class="news-tag tag-dev">Разработка</span>
                        <div class="news-card-footer"><a href="news-templates.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">15 февраля 2026</div>
                        <h3>Интеграция с порталом Госуслуг</h3>
                        <p>Настроен единый вход через ЕСИА для упрощения авторизации сотрудников и поставщиков.</p><span
                            class="news-tag tag-update">Интеграция</span>
                        <div class="news-card-footer"><a href="news-gosuslugi.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">01 марта 2026</div>
                        <h3>Вебинар для потенциальных поставщиков</h3>
                        <p>Проведён онлайн-семинар о правилах участия в муниципальных закупках Кимовского района.</p>
                        <span class="news-tag tag-event">Мероприятие</span>
                        <div class="news-card-footer"><a href="news-webinar.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">10 февраля 2026</div>
                        <h3>Запуск личного кабинета заказчика</h3>
                        <p>Сотрудники администрации получили доступ к личному кабинету с функцией управления
                            планами-графиками.</p><span class="news-tag tag-dev">Разработка</span>
                        <div class="news-card-footer"><a href="news-cabinet.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">20 февраля 2026</div>
                        <h3>Оптимизация скорости загрузки</h3>
                        <p>Проведён рефакторинг фронтенда. Время отклика системы сокращено на 40%.</p><span
                            class="news-tag tag-update">Производительность</span>
                        <div class="news-card-footer"><a href="news-performance.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-body">
                        <div class="news-date">05 февраля 2026</div>
                        <h3>Публикация отчёта за 2025 год</h3>
                        <p>В системе размещена сводная статистика по всем проведённым закупкам муниципального
                            образования.</p><span class="news-tag tag-law">Отчётность</span>
                        <div class="news-card-footer"><a href="news-report-2025.php" class="news-read-more">Подробнее</a></div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <a href="news.php">1</a>
                <a class="active" href="news2.php">2</a>
                <a href="news3.php">3</a>
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